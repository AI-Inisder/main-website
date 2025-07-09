<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OrderApiService
{
    private $baseUrl;
    private $defaultHeaders;

    public function __construct()
    {
        $this->baseUrl = config('services.order_api.base_url', 'https://chatbox.tradisco.id/api/v1/orders');
        $this->defaultHeaders = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    public function createOrder($orderData)
    {
        try {
            // Log sebelum request
            \Log::info('Order API Request', [
                'url' => $this->baseUrl . '/',
                'data' => $orderData
            ]);

            $response = \Http::withHeaders($this->defaultHeaders)
                ->timeout(30)
                ->withoutRedirecting()
                ->post($this->baseUrl . '/', $orderData);

            // Log setelah request
            \Log::info('Order API Response', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            if ($response->successful()) {
                return [
                    'success' => true,
                    'data' => $response->json()
                ];
            }

            return [
                'success' => false,
                'message' => $response->json('message', 'Failed to create order'),
                'errors' => $response->json('errors', [])
            ];
        } catch (\Exception $e) {
            \Log::error('Order API Error: ' . $e->getMessage());
            
            // For testing: return a mock successful response if in local environment
            if (app()->environment('local') && config('app.debug')) {
                \Log::info('Returning mock order response for local testing');
                return [
                    'success' => true,
                    'data' => [
                        'order_number' => 'ORD-' . date('Ymd') . '-' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT),
                        'status' => 'pending',
                        'message' => 'Order created successfully (mock response)',
                        'tracking_url' => route('orders.track')
                    ]
                ];
            }
            
            return [
                'success' => false,
                'message' => 'Network error occurred: ' . $e->getMessage(),
                'errors' => []
            ];
        }
    }

    public function trackOrder($identifier)
    {
        try {
            $response = Http::withHeaders($this->defaultHeaders)
                ->timeout(30)
                ->get($this->baseUrl . '/' . urlencode($identifier) . '/status');

            if ($response->successful()) {
                return [
                    'success' => true,
                    'data' => $response->json('data')
                ];
            }

            return [
                'success' => false,
                'message' => $response->json('message', 'Order not found'),
                'errors' => []
            ];
        } catch (\Exception $e) {
            Log::error('Order Tracking Error: ' . $e->getMessage());
            return [
                'success' => false,
                'message' => 'Network error occurred',
                'errors' => []
            ];
        }
    }

    public function getOrderDetails($identifier)
    {
        try {
            $response = Http::withHeaders($this->defaultHeaders)
                ->timeout(30)
                ->get($this->baseUrl . '/' . urlencode($identifier) . '/details');

            if ($response->successful()) {
                return [
                    'success' => true,
                    'data' => $response->json('data')
                ];
            }

            return [
                'success' => false,
                'message' => $response->json('message', 'Order not found'),
                'errors' => []
            ];
        } catch (\Exception $e) {
            Log::error('Order Details Error: ' . $e->getMessage());
            return [
                'success' => false,
                'message' => 'Network error occurred',
                'errors' => []
            ];
        }
    }

    public function searchOrdersByEmail($email)
    {
        try {
            $response = Http::withHeaders($this->defaultHeaders)
                ->timeout(30)
                ->post($this->baseUrl . '/search', ['email' => $email]);

            if ($response->successful()) {
                return [
                    'success' => true,
                    'data' => $response->json('data')
                ];
            }

            return [
                'success' => false,
                'message' => $response->json('message', 'No orders found'),
                'errors' => []
            ];
        } catch (\Exception $e) {
            Log::error('Order Search Error: ' . $e->getMessage());
            return [
                'success' => false,
                'message' => 'Network error occurred',
                'errors' => []
            ];
        }
    }

    public function getUserOrders($token)
    {
        try {
            $response = Http::withHeaders(array_merge($this->defaultHeaders, [
                'Authorization' => 'Bearer ' . $token
            ]))
                ->timeout(30)
                ->get($this->baseUrl . '/user/orders');

            if ($response->successful()) {
                return [
                    'success' => true,
                    'data' => $response->json('data'),
                    'pagination' => $response->json('pagination')
                ];
            }

            return [
                'success' => false,
                'message' => $response->json('message', 'Failed to fetch orders'),
                'errors' => []
            ];
        } catch (\Exception $e) {
            Log::error('User Orders Error: ' . $e->getMessage());
            return [
                'success' => false,
                'message' => 'Network error occurred',
                'errors' => []
            ];
        }
    }

    public function getAvailableProducts()
    {
        try {
            $response = Http::withHeaders($this->defaultHeaders)
                ->timeout(30)
                ->get(str_replace('/api/v1/orders', '/api/v1/products', $this->baseUrl));

            if ($response->successful()) {
                return [
                    'success' => true,
                    'data' => $response->json('data')
                ];
            }

            return [
                'success' => false,
                'message' => $response->json('message', 'Failed to fetch products'),
                'errors' => []
            ];
        } catch (\Exception $e) {
            Log::error('Products API Error: ' . $e->getMessage());
            // Return default products if API fails
            return [
                'success' => true,
                'data' => [
                    ['id' => 1, 'name' => 'Web Development', 'category' => 'Development'],
                    ['id' => 2, 'name' => 'Mobile Application', 'category' => 'Development'],
                    ['id' => 3, 'name' => 'Software Development', 'category' => 'Development'],
                    ['id' => 4, 'name' => 'UI/UX Design', 'category' => 'Design'],
                    ['id' => 5, 'name' => 'Chatbot Development', 'category' => 'AI Solutions'],
                    ['id' => 6, 'name' => 'API Integration', 'category' => 'Development'],
                    ['id' => 7, 'name' => 'Technical Consultation', 'category' => 'Consultation']
                ]
            ];
        }
    }
}
