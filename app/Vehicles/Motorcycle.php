<?php

namespace App\Vehicles;

class Motorcycle extends Vehicle
{
    public function __construct()
    {
        $this->name = 'Motorcycle';
        $this->dailyRate = 500;
    }

    public function calculateRental(int $days): float
    {
        return $this->dailyRate * $days;
    }
}
