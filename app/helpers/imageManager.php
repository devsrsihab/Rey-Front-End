<?php 

namespace App\helpers;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageManager
{
    protected static $storagePath = 'public/images/';

    public static function upload(UploadedFile $file, $folder = '')
    {
        // Ensure the directory exists
        $directory = self::$storagePath . $folder;

        if (!Storage::disk('public')->exists($directory)) {
            Storage::disk('public')->makeDirectory($directory);
        }

        // $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $fileName = Carbon::now()->format('Y-m-d_H-i-s') . '.' . $file->getClientOriginalExtension();
        $file->storeAs($directory, $fileName);

        return $fileName;
    }

    public static function update(UploadedFile $file, $folder = '', $existingFileName = null)
    {
        if ($existingFileName) {
            self::delete($existingFileName, $folder);
        }

        return self::upload($file, $folder);
    }

     public static function delete($fileName, $folder = '')
    {
        $directory = self::$storagePath . $folder;
        Storage::disk('public')->delete($directory . '/' . $fileName);
    }

}