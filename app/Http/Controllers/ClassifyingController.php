<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class ClassifyingController extends Controller
{
    function start_classify(Request $request){
        if ($request->hasFile('image')) {
            $img_path = Storage::disk('public')->putFile('folder-destination', $request->file('image'));

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
            $data_path = Storage::disk('public')->putFile('folder-destination', $request->file('data'));
        }
//        dd("here");

        // /usr/local/my-scripts
//        $output_data = exec('python3 /usr/local/my-scripts/classify.py /var/www/laravel/storage/app/public/folder-destination/img /var/www/laravel/storage/app/public/folder-destination/data');
        $script = 'python3 /usr/local/my-scripts/classify.py ' . $img_path . ' ' . $data_path;
        $output_data = exec($script);

        return view('classify_result');

    }
}
