<?php

namespace App\Interfaces;

interface ImageManagement
{
    public function upload(): bool;

    public function remove(): bool;
}
