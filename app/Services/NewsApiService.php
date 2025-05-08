<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NewsApiService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = 'https://cms.asets.id/api/news';
    }

    public function getAllNews()
    {
        try {
            $response = Http::get($this->baseUrl);

            if ($response->successful()) {
                $responseData = $response->json();

                if (isset($responseData['status']) && $responseData['status'] === true && isset($responseData['data'])) {
                    // Filter only news with category "AI-Insider"
                    $filteredNews = array_filter($responseData['data'], function ($item) {
                        return isset($item['category']) && $item['category'] === 'AI-Insider';
                    });

                    return ['status' => true, 'data' => array_values($filteredNews)];
                }
            }

            return ['status' => false, 'message' => 'Failed to fetch news', 'data' => []];
        } catch (\Exception $e) {
            return ['status' => false, 'message' => $e->getMessage(), 'data' => []];
        }
    }

    public function getNewsBySlug($slug)
    {
        try {
            // Get all news and filter by slug and category
            $response = Http::get($this->baseUrl);

            if ($response->successful()) {
                $responseData = $response->json();

                if (isset($responseData['status']) && $responseData['status'] === true && isset($responseData['data'])) {
                    $allNews = $responseData['data'];

                    // Filter news by slug AND category "AI-Insider"
                    $filteredNews = array_filter($allNews, function ($item) use ($slug) {
                        return isset($item['slug']) && $item['slug'] === $slug &&
                            isset($item['category']) && $item['category'] === 'AI-Insider';
                    });

                    if (!empty($filteredNews)) {
                        // Get the first news item that matches the slug and category
                        return ['status' => true, 'data' => reset($filteredNews)];
                    }
                }
            }

            // Try to use a specific API endpoint for slug if available
            $slugResponse = Http::get("{$this->baseUrl}/{$slug}");

            if ($slugResponse->successful()) {
                $slugResponseData = $slugResponse->json();

                if (
                    isset($slugResponseData['status']) && $slugResponseData['status'] === true &&
                    isset($slugResponseData['data']) &&
                    isset($slugResponseData['data']['category']) &&
                    $slugResponseData['data']['category'] === 'AI-Insider'
                ) {

                    return ['status' => true, 'data' => $slugResponseData['data']];
                }
            }

            return ['status' => false, 'message' => 'News not found or not in AI-Insider category', 'data' => null];
        } catch (\Exception $e) {
            return ['status' => false, 'message' => $e->getMessage(), 'data' => null];
        }
    }
}
