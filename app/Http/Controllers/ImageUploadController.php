<?php

namespace App\Http\Controllers;

use App\Interfaces\ImageUpload;
use Illuminate\Http\JsonResponse;

class ImageUploadController extends Controller
{
    public function upload(ImageUpload $imageUpload): JsonResponse
    {
        $success = $imageUpload->upload();

        return response()->json([
                                    'uploaded' => $success,
                                ]);
    }

    public function remove(ImageUpload $imageUpload): JsonResponse
    {
        $success = $imageUpload->remove();

        return response()->json([
                                    'removed' => $success,
                                ]);
    }
}
