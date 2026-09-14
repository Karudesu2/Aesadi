<?php

namespace App\Vehicles;

class Van extends Vehicle
{
    public function __construct()
    {
        $this->name = 'Van';
        $this->dailyRate = 2500;
    }

    public function calculateRental(int $days): float
    {
        return ($this->dailyRate * $days) + 1000;
    }
}
