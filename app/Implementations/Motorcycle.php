<?php

namespace App\Implementations;

use App\Interfaces\Vehicle;

class Motorcycle implements Vehicle
{
    public function startEngine(): void
    {
        //TODO add some code here
    }

    public function amountOfWheels(): int
    {
        return 2;
    }

    public function type(): string
    {
        return 'Motorcycle';
    }
}
