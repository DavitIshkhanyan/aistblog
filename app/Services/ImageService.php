<?php

namespace App\Http\Controllers;

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ImageService
{
    /**
     * Save image
     * @param $file
     * @param $object
     * @param $path
     * @param $field
     */
    public function saveImage($file, $object, $path, $field = 'image')
    {
        $imageFileName = time() . rand(1000000, 9999999) . '.' . $file->getClientOriginalExtension();
//        $s3 = Storage::disk('s3');
        $s3 = Storage::disk('public');
        $s3->put('/' . $path . '/' . $imageFileName, file_get_contents($file), 'public');
        $object->$field = $imageFileName;
        $object->save();
    }
}





