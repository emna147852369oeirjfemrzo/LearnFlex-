<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class EventRecommendationService
{
    //private const API_URL = 'https://api.predicthq.com/v1/events/';
    //private const API_TOKEN = '0vU9ptDJlfWnglBFGet8h9jxicTv_UiCLdjb6UhE';

    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getRecommendations(): array
    {
        $response = $this->httpClient->request('GET', self::API_URL, [
            'headers' => [
                'Authorization' => 'Bearer ' . self::API_TOKEN,
                'Accept' => 'application/json',
            ]
        ]);

        if ($response->getStatusCode() !== 200) {
            throw new \Exception("PredictHQ API Error (" . $response->getStatusCode() . "): " . $response->getContent(false));
        }

        $data = $response->toArray();
        
        return $data['results'] ?? [];
    }
}
