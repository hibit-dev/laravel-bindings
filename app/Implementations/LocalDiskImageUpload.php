<?php

namespace App\Implementations;

use App\Interfaces\ImageUpload;

class LocalDiskImageUpload implements ImageUpload
{
    public function upload(): bool
    {
        // TODO implement code to save the file on local disk

        return true; // File uploaded
    }

    public function remove(): bool
    {
        // TODO implement code to removed the file from local disk

        return true; // File removed
    }
}
