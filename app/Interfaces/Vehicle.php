<?php

namespace App\Interfaces;

interface Vehicle
{
    public function startEngine(): void;

    public function amountOfWheels(): int;

    public function type(): string;
}
