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
        }
        if ($request->hasFile('data')){
            $data_path = Storage::disk('public')->putFile('folder-destination', $request->file('data'));
        }
        $script = 'python3 /usr/local/my-scripts/classify.py ' . '/var/www/laravel/storage/app/public/'. $img_path . ' ' . '/var/www/laravel/storage/app/public/'.$data_path;
        $num_of_sgs = exec($script);

        return view('classify_result',["num_of_sgs" => intval($num_of_sgs)]);

    }

    function start_training(Request $request){

        if($request->hasFile('images')){
            $images = $request->file('images');
            foreach ($images as $image){
                $img_path = Storage::disk('public')->putFile('taining-imgs', $image);
            }
        }
        if($request->hasFile('datas')){
            $datas = $request->file('datas');
            foreach ($datas as $data){
                $img_path = Storage::disk('public')->putFile('taining-datas', $data);
            }
        }


    }
}
