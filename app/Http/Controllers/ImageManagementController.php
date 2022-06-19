<?php

namespace App\Http\Controllers;

use App\Interfaces\ImageManagement;
use Illuminate\Http\JsonResponse;

class ImageManagementController extends Controller
{
    public function upload(ImageManagement $imageManagement): JsonResponse
    {
        $success = $imageManagement->upload();

        return response()->json([
                                    'uploaded' => $success,
                                ]);
    }

    public function remove(ImageManagement $imageManagement): JsonResponse
    {
        $success = $imageManagement->remove();

        return response()->json([
                                    'removed' => $success,
                                ]);
    }
}
