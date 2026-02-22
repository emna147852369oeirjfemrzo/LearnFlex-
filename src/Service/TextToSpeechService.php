<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class TextToSpeechService
{
    private $httpClient;
    //private const API_URL = 'https://text-to-speach-api.p.rapidapi.com/text-to-speech';
    //private const API_KEY = '871a9960aamshec831e687d18df7p1227afjsn95ab3a1d0511';

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function convertTextToSpeech(string $text, string $lang = 'en', string $speed = 'slow'): string
    {
        $response = $this->httpClient->request('POST', self::API_URL, [
            'headers' => [
                'x-rapidapi-key' => self::API_KEY,
                'x-rapidapi-host' => 'text-to-speach-api.p.rapidapi.com',
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'text' => $text,
                'lang' => $lang,
                'speed' => $speed
            ]
        ]);

        if ($response->getStatusCode() !== 200) {
            $content = $response->getContent(false);
            throw new \Exception("TTS API Error (" . $response->getStatusCode() . "): " . $content);
        }

        return $response->getContent();
    }
}
