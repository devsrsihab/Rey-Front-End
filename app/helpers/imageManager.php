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
           // Define the base path for the uploads relative to the public directory
            $basePath = 'uploads/images/'; // This path is relative to the public directory

            // Ensure the directory exists
            $directory = public_path($basePath . $folder);

            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            // Generate the file name
            $fileName = Carbon::now()->format('Y-m-d_H-i-s') . '.' . $file->getClientOriginalExtension();

            // Move the file to the target directory
            $file->move($directory, $fileName);

            // Return just the file name
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

    public static function show($fileName, $folder = '')
    {
        $directory = self::$storagePath . $folder;
        $filePath = $directory . '/' . $fileName;

        if (Storage::disk('public')->exists($filePath)) {
            $fileContents = Storage::disk('public')->get($filePath);
            $fileType = Storage::disk('public')->mimeType($filePath);

            return response($fileContents)->header('Content-Type', $fileType);
        }

        return abort(404);
    }

}