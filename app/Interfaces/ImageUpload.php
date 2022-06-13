<?php

namespace App\Interfaces;

interface ImageUpload
{
    public function upload(): bool;

    public function remove(): bool;
}
