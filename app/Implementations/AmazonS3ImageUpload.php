<?php

namespace App\Implementations;

use App\Interfaces\ImageUpload;

class AmazonS3ImageUpload implements ImageUpload
{
    public function __construct()
    {
        //TODO inject Amazon package
    }

    public function upload(): bool
    {
        // TODO implement code to save the file on Amazon S3

        return true; // File uploaded
    }

    public function remove(): bool
    {
        // TODO implement code to removed the file from Amazon S3

        return true; // File removed
    }
}
