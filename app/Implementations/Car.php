<?php

namespace App\Implementations;

use App\Interfaces\Vehicle;

class Car implements Vehicle
{
    public function startEngine(): void
    {
        //TODO add some code here
    }

    public function amountOfWheels(): int
    {
        return 4;
    }

    public function type(): string
    {
        return 'Car';
    }
}
