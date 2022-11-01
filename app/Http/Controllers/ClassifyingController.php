<?php

namespace App\Http\Controllers;

use App\Models\BaseImage;
use App\Models\Spot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use View;


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

        $img_arr = [];
        $data_arr = [];
        if($request->hasFile('images')){
            $images = $request->file('images');
            foreach ($images as $image){
                $img_path = Storage::disk('public')->putFile('taining-imgs', $image);
                $img_arr[] = "storage/".$img_path;
            }
        }
        if($request->hasFile('datas')){
            $datas = $request->file('datas');
            foreach ($datas as $data){
                $img_path = Storage::disk('public')->putFile('taining-datas', $data);
                $data_arr[] = "storage/".$img_path;
            }
        }
        return View::make('choose_desired_images', compact('img_arr','data_arr'));


    }

    function self_training(Request $request){
        if ($request->hasFile('image')) {
            $img_path = Storage::disk('public')->putFile('self-classify-images', $request->file('image'));
            $image = new BaseImage;
            $image->path = $img_path;
            $image->save();
        }else{
            return redirect()->back();
        }
        return $this->self_training_spots($image->id);
    }

    function self_training_spots($id){
        $image = BaseImage::find($id);
        return view('self_classify_spots',["image" => $image]);
    }

    function upload(Request $request){
         if ($request->hasFile('croppedImage')) {
             $img_path = Storage::disk('public')->putFile('spots-images', $request->file('croppedImage'));
             $image = new Spot;
             $image->path = $img_path;
             $image->image_id = 1;
             $image->save();
             return redirect()->back();

         }else{
             return redirect()->back();
         }
    }

}
