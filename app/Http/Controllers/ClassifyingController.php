<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassifyingController extends Controller
{
    function start_classify(Request $request){
        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
//            $img->resize(120, 120, function ($constraint) {
//                $constraint->aspectRatio();
//            });

            $img->stream(); // <-- Key point

            //dd();
            Storage::disk('public')->put('images/'.'/'.$fileName, $img, 'public');
        }
        if ($request->hasFile('data')){
            Storage::disk('public')->putFile('folder-destination/', $request->file('data'));
        }

        //TODO : run python file on these files




    }
}
