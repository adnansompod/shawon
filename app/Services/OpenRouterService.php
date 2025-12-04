<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OpenRouterService
{
    protected $apiKey;
    protected $model;

    public function __construct()
    {
        $this->apiKey = env('OPENROUTER_API_KEY');
        $this->model = env('OPENROUTER_MODEL', 'meta-llama/llama-3.1-8b-instruct:free');
    }

    public function chat(string $prompt): string
    {
        $url = "https://openrouter.ai/api/v1/chat/completions";

        $payload = [
            "model" => $this->model,
            "messages" => [
                ["role" => "user", "content" => $prompt]
            ],
            "temperature" => 0.7,
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type'  => 'application/json'
        ])->withOptions([
            'curl' => [CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4]
        ])->post($url, $payload);

        $responseJson = $response->json();

        // Check for proper response
        if (isset($responseJson['choices'][0]['message']['content'])) {
            return $responseJson['choices'][0]['message']['content'];
        } elseif (isset($responseJson['error']['message'])) {
            return 'Error: ' . $responseJson['error']['message'];
        } else {
            return 'No response from API';
        }
    }
}
