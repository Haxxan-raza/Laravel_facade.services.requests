<?php

namespace App\Helpers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestFormHelperClass
{

    public function saveImage($image) {
        $profilePhoto =  '';
        if(empty($image)) {
            $profilePhoto =  '';
        } else {
            $destinationPath = public_path().'/images/' ;
            $fileName = time().'.'.$image->clientExtension();
            $image->move($destinationPath, $fileName);
            $profilePhoto = $fileName;
        }
        return $profilePhoto;
    }
    
    public function updateImage($image,$dbrecord) {
        if(empty($image)) {
            $profilePhoto = $dbrecord;
        } else {
            $imagePath =  $getimagePath.$dbrecord;
            if(File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $destinationPath = $getimagePath;
            $file = $image;
            $fileName = time().'.'.$file->clientExtension();
            $file->move($destinationPath, $fileName);
            $profilePhoto = $fileName;
        }
        return $profilePhoto;

    }

}