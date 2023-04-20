<?php

namespace App\Service;

use App\Entity\Weather;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class OpenWeatherService
{
    private $httpClient;
    private $apiKey;
    private $apiBaseUrl;
    private $apiEndpoints;

    public function __construct(HttpClientInterface $httpClient, string $apiKey, string $apiBaseUrl, array $apiEndpoints)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $apiKey;
        $this->apiBaseUrl = $apiBaseUrl;
        $this->apiEndpoints = $apiEndpoints;
    }

    public function fetchWeatherDataByCoordinates(float $latitude, float $longitude): Weather
    {
        $response = $this->httpClient->request('GET', $url, [
            'headers' => $this->createAuthHeader(),
        ]);

        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Error while fetching data from API');
        }

        return $response->toArray();
    }

    public function fetchWeatherDataByZip(string $zipCode): Weather
    {
        // Make the API call, process the response, and create a Weather entity
    }

    private function createAuthHeader(): array
    {
        return [
            'Authorization' => "Bearer {$this->apiKey}",
        ];
    }
}
