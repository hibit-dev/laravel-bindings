<?php

namespace App\Http\Controllers;

use App\Interfaces\Vehicle;
use Illuminate\Http\JsonResponse;

class BusController extends Controller
{
    private Vehicle $vehicle;
    
    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function binding(): JsonResponse
    {
        return response()->json([
                                    'wheels' => $this->vehicle->amountOfWheels(),
                                    'type'   => $this->vehicle->type(),
                                ]);
    }
}
