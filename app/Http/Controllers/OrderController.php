<?php

namespace App\Http\Controllers;

use App\Services\OrderApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    protected $orderApiService;

    public function __construct(OrderApiService $orderApiService)
    {
        $this->orderApiService = $orderApiService;
    }

    public function index()
    {
        $products = $this->orderApiService->getAvailableProducts();
        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|min:2|max:255',
            'companyName' => 'required|string|min:2|max:255',
            'division' => 'required|string|min:2|max:255',
            'companyEmail' => 'required|email',
            'productType' => 'nullable|in:predefined,custom',
            'productName' => 'nullable|string',
            'customProduct' => 'required|in:Market Profiling,Talent Profiling,Customize AI Usecase',
            'projectType' => 'nullable|in:new,existing',
            'projectName' => 'required_if:projectType,existing',
            'orderDescription' => 'required|string|min:10|max:2000',
            'googleDriveLink' => 'nullable|url'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $orderData = $request->only([
            'fullName',
            'companyName',
            'division',
            'companyEmail',
            'productType',
            'productName',
            'customProduct',
            'projectType',
            'projectName',
            'orderDescription',
            'googleDriveLink'
        ]);

        $result = $this->orderApiService->createOrder($orderData);

        if ($result['success']) {
            // Check if the response has the expected structure
            if (isset($result['data']['order_number'])) {
                return redirect()->route('orders.track', $result['data']['order_number'])
                    ->with('success', 'Order created successfully! Order Number: ' . $result['data']['order_number']);
            } elseif (isset($result['data']['data']['order_number'])) {
                // Alternative structure from API
                return redirect()->route('orders.track', $result['data']['data']['order_number'])
                    ->with('success', 'Order created successfully! Order Number: ' . $result['data']['data']['order_number']);
            } else {
                // Fallback if order_number is not found
                \Log::warning('Order created but order_number not found in response', ['response' => $result]);
                return redirect()->route('orders.track')
                    ->with('success', 'Order created successfully! Please check your email for order details.');
            }
        }

        // Log the error for debugging
        \Log::error('Order creation failed', ['result' => $result, 'orderData' => $orderData]);
        
        $errorMessage = isset($result['message']) ? $result['message'] : 'Failed to create order. Please try again.';
        return back()->withErrors(['api' => $errorMessage])->withInput();
    }

    public function track($identifier = null)
    {
        $order = null;
        $error = null;

        if ($identifier) {
            $result = $this->orderApiService->trackOrder($identifier);
            if ($result['success']) {
                $order = $result['data'];
            } else {
                $error = $result['message'];
            }
        }

        return view('orders.track', compact('order', 'error'));
    }

    public function trackPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'identifier' => 'required|string'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        return redirect()->route('orders.track', $request->identifier);
    }

    public function details($identifier)
    {
        $result = $this->orderApiService->getOrderDetails($identifier);
        
        if ($result['success']) {
            return view('orders.details', ['order' => $result['data']]);
        }

        return back()->withErrors(['api' => $result['message']]);
    }

    public function search(Request $request)
    {
        $orders = [];
        $error = null;

        if ($request->has('email')) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email'
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator);
            }

            $result = $this->orderApiService->searchOrdersByEmail($request->email);
            if ($result['success']) {
                $orders = $result['data'];
            } else {
                $error = $result['message'];
            }
        }

        return view('orders.search', compact('orders', 'error'));
    }

    public function userOrders(Request $request)
    {
        $token = $request->bearerToken() ?? session('api_token');
        
        if (!$token) {
            return redirect()->route('login')->with('error', 'Please login to view your orders');
        }

        $result = $this->orderApiService->getUserOrders($token);
        
        if ($result['success']) {
            return view('orders.user-orders', [
                'orders' => $result['data'],
                'pagination' => $result['pagination'] ?? null
            ]);
        }

        return back()->withErrors(['api' => $result['message']]);
    }
}