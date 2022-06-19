<?php

namespace App\Implementations;

use App\Interfaces\ImageManagement;

class GoogleDriveImageManagement implements ImageManagement
{
    public function __construct()
    {
        //TODO inject Google Drive package
    }

    public function upload(): bool
    {
        // TODO implement code to save the file on Google Drive

        return true; // File uploaded
    }

    public function remove(): bool
    {
        // TODO implement code to removed the file from Google Drive

        return true; // File removed
    }
}
