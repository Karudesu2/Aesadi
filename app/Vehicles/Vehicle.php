<?php

namespace App\Vehicles;

abstract class Vehicle
{
    protected string $name;
    protected float $dailyRate;

    public function getName(): string
    {
        return $this->name;
    }

    public function getDailyRate(): float
    {
        return $this->dailyRate;
    }

    abstract public function calculateRental(int $days): float;
}
