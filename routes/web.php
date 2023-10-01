<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;
use Intervention\Image\File;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/watermark', function () {
    return view('watermark');
});

Route::post('/post-watermark', function (Request $request) {

    $waterMarkUrl = 'logo.png';
    $images = $request->image;
    foreach ($images as $data){
        $image = $data;
        $imageName = $image->getClientOriginalName();
        $directory = 'watermarked_images/'.$imageName;
        if (!file_exists(public_path($directory))) {
            $imgFile = Image::make($image);

            //Watermark image
            $imgFile->insert($waterMarkUrl, 'bottom-right', 10, 10);

            //Watermark text
            // $imgFile->text('© tanvirbhuiyan.com', 120, 100, function($font) {
            //     $font->size(35);
            //     $font->color('#ffffff');
            //     $font->align('center');
            //     $font->valign('bottom');
            //     $font->angle(90);
            // });

            $imgFile->save($directory);
        }
    }
    return "Image Watermarked Successfully!!";

});
