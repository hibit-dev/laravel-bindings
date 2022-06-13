<?php

namespace App\Implementations;

use App\Interfaces\Vehicle;

class Bus implements Vehicle
{
    public function startEngine(): void
    {
        //TODO add some code here
    }

    public function amountOfWheels(): int
    {
        return 6;
    }

    public function type(): string
    {
        return 'Bus';
    }
}
