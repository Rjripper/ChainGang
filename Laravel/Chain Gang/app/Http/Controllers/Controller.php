<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Image;
use Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    public function resizeImage($filename, $folder, $width, $height, $photo)
    {        
        // dd($photo);
        $filename = time() . '.' . $photo->getClientOriginalExtension();
        $image = Image::make($photo)->resize($width, $height)->save($filename);
        Storage::disk('public')->put($folder . $filename, $image);

        return $filename;
    }
}
