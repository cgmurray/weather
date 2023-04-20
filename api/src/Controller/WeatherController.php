<?php

namespace App\Controller;

use App\Service\OpenWeatherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController extends AbstractController
{
    private $weatherService;

    public function __construct(OpenWeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    /**
     * @Route("/weather/coordinates", methods={"GET"}, name="get_weather_by_coordinates")
     */
    public function getWeatherByCoordinates(float $latitude, float $longitude): JsonResponse
    {
        $weatherData = $this->weatherService->fetchWeatherDataByCoordinates($latitude, $longitude);
        return new JsonResponse($weatherData);
    }

    /**
     * @Route("/weather/zip", methods={"GET"}, name="get_weather_by_zip")
     */
    public function getWeatherByZip(string $zipCode): JsonResponse
    {
        $weatherData = $this->weatherService->fetchWeatherDataByZip($zipCode);
        return new JsonResponse($weatherData);
    }
}
