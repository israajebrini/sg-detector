<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClassifyingController extends Controller
{
    function start_classify(Request $request){
        if ($request->hasFile('image')) {
            Storage::disk('public')->putFile('folder-destination/img', $request->file('image'));

//            $image      = $request->file('image');
//            $fileName   = time() . '.' . $image->getClientOriginalExtension();
//
//            $img = Image::make($image->getRealPath());
//            $img->resize(120, 120, function ($constraint) {
//                $constraint->aspectRatio();
//            });

//            $img->stream(); // <-- Key point

            //dd();
//            Storage::disk('public')->put('images/'.'/'.$fileName, $img, 'public');
        }
        if ($request->hasFile('data')){
            Storage::disk('public')->putFile('folder-destination/data', $request->file('data'));
        }

        //TODO : run python file on these files

        // /usr/local/my-scripts
        $output_data = exec('python3 /usr/local/my-scripts/classify.py /var/www/laravel/storage/app/public/folder-destination/img.jpg /var/www/laravel/storage/app/public/folder-destination/data.csv');

    }
}
