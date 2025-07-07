<?php

namespace App\Http\Controllers;

use App\Services\NewsApiService;
use Illuminate\Http\Request;

class DemosController extends Controller
{
    public function indexOnePage()
    {
        return view('demos/indexOnePage');
    }

    public function index()
    {
        $newsApiService = app(NewsApiService::class);
        $response = $newsApiService->getAllNews();
        $news = $response['status'] ? array_slice($response['data'], 0, 3) : []; // Get first 3 news

        return view('demos/index', ['news' => $news]);
    }

    public function specialist()
    {
        return view('demos/specialist');
    }

    public function index2OnePage()
    {
        return view('demos/index2OnePage');
    }
    public function index2()
    {
        return view('demos/index2');
    }
    public function index3OnePage()
    {
        return view('demos/index3OnePage');
    }
    public function index3()
    {
        return view('demos/index3');
    }
    public function index4OnePage()
    {
        return view('demos/index4OnePage');
    }
    public function index4()
    {
        return view('demos/index4');
    }
    public function index5OnePage()
    {
        return view('demos/index5OnePage');
    }
    public function index5()
    {
        return view('demos/index5');
    }
    public function index6OnePage()
    {
        return view('demos/index6OnePage');
    }
    public function index6()
    {
        return view('demos/index6');
    }
    public function index7OnePage()
    {
        return view('demos/index7OnePage');
    }
    public function index7()
    {
        return view('demos/index7');
    }
    public function indexRtl()
    {
        return view('demos/indexRtl');
    }
    public function indexDark()
    {
        return view('demos/indexDark');
    }
    public function indexBoxed()
    {
        return view('demos/indexBoxed');
    }
    public function makeaClaimDeath()
    {
        return view('demos/makeaClaimDeath');
    }
}
