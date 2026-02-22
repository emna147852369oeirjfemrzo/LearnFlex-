<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class AiContentService
{
    private $httpClient;
    //private const API_URL = 'https://ai-content-writer.p.rapidapi.com/data';
    //private const API_KEY = '871a9960aamshec831e687d18df7p1227afjsn95ab3a1d0511';
    //private const API_HOST = 'ai-content-writer.p.rapidapi.com';

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function generateDescription(string $topic): string
    {
        $response = $this->httpClient->request('POST', self::API_URL, [
            'headers' => [
                'x-rapidapi-key' => self::API_KEY,
                'x-rapidapi-host' => self::API_HOST,
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'body' => [
                'topic' => $topic,
                'tone' => 'professional',
                'length' => '300',
            ]
        ]);

        if ($response->getStatusCode() !== 200) {
            $content = $response->getContent(false);
            throw new \Exception("AI Content API Error (" . $response->getStatusCode() . "): " . $content);
        }

        $data = $response->toArray();
        
        // Check for multiple possible keys based on common RapidAPI AI writer patterns
        $content = $data['content'] ?? $data['data'] ?? $data['text'] ?? $data['generated_text'] ?? $data['result'] ?? null;

        if ($content === null) {
            return 'Content not generated. Unexpected response structure.';
        }

        return $content;
    }
}
