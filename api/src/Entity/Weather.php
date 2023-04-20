<?php

namespace App\Entity;

class Weather
{
    private float $currentTemperature;
    private float $minTemperature;
    private float $maxTemperature;
    private int $humidity;

    public function __construct(
        float $currentTemperature,
        float $minTemperature,
        float $maxTemperature,
        int $humidity
    ) {
        $this->currentTemperature = $currentTemperature;
        $this->minTemperature = $minTemperature;
        $this->maxTemperature = $maxTemperature;
        $this->humidity = $humidity;
    }

    public function getCurrentTemperature(): float
    {
        return $this->currentTemperature;
    }

    public function getMinTemperature(): float
    {
        return $this->minTemperature;
    }

    public function getMaxTemperature(): float
    {
        return $this->maxTemperature;
    }

    public function getHumidity(): int
    {
        return $this->humidity;
    }
}
