<?php

namespace App\Http\Controllers;

use App\Models\BaseImage;
use App\Models\Spot;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use View;
use ZipArchive;

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
             return response('Hello World', 200);

         }else{
             return response('Hello World', 200);
         }
    }

    function downloadZipImages(Request $request,BaseImage $image){
        $photos = $image->spots;
        $dir = time();
        foreach ($photos as $file) {
            /* Log::error(ImageHandler::getUploadPath(false, $file));*/
            $imgName = last(explode('/', $file->path));
            $path = public_path('spots-images/' . $dir);
            if (!File::exists($path)) {
                File::makeDirectory($path, 0775, true);
            }
            ImageHandler::downloadFile($file, $path . '/' . $imgName);
        }
        $path = public_path('spots-images');
        $rootPath = realpath($path);
        $zip_file = 'Photos.zip';
        $public_dir = public_path();
        $zip = new ZipArchive();
        $zip->open($zip_file, ZipArchive::CREATE | ZipArchive::OVERWRITE);
        /** @var SplFileInfo[] $files */
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($rootPath),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $name => $file1) {
            // Skip directories (they would be added automatically)
            if (!$file1->isDir()) {
                // Get real and relative path for current file
                $filePath = $file1->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);
                // Add current file to archive
                $zip->addFile($filePath, $relativePath);
            }
        }

        // Zip archive will be created only after closing object
        $zip->close();
        $fileurl = public_path()."/Photos.zip";
        if (file_exists($fileurl)) {
            return Response::download($fileurl, 'Photos.zip', array('Content-Type: application/octet-stream','Content-Length: '. filesize($fileurl)))->deleteFileAfterSend(true);
        } else {
            return ['status'=>'zip file does not exist'];
        }
    }

}
