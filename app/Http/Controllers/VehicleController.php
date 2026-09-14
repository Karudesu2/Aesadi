<?php

namespace App\Http\Controllers;

use App\Vehicles\Car;
use App\Vehicles\Motorcycle;
use App\Vehicles\Van;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        return view('vehicle.index');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'vehicle' => 'required|in:car,motorcycle,van',
            'days' => 'required|integer|min:1',
        ]);

        // Create vehicle objects
        $vehicles = [
            'car' => new Car(),
            'motorcycle' => new Motorcycle(),
            'van' => new Van(),
        ];

        // Select the vehicle
        $vehicle = $vehicles[$request->vehicle];

        // Get number of days
        $days = (int) $request->days;

        // Calculate base rental
        $baseRental = $vehicle->getDailyRate() * $days;

        // Calculate total using polymorphism
        $total = $vehicle->calculateRental($days);

        // Send all variables to the Blade view
        return view('vehicle.index', compact(
            'vehicle',
            'days',
            'baseRental',
            'total'
        ));
    }
}