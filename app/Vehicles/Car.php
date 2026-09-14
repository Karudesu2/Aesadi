<?php

namespace App\Vehicles;

class Car extends Vehicle
{
    public function __construct()
    {
        $this->name = 'Car';
        $this->dailyRate = 1500;
    }

    public function calculateRental(int $days): float
    {
        return ($this->dailyRate * $days) + 500;
    }
}
