<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait UploadFile
{
    /**
     * Upload file to storage
     */
    public function uploadFile(\Illuminate\Http\UploadedFile $file, string $folder = 'unknown'): string|bool
    {
        return $file->store($folder, 'public');
    }

    /**
     * Delete file from storage
     */
    public function deleteFile(string $file_path): bool
    {
        return Storage::disk('public')->delete($file_path);
    }
}
