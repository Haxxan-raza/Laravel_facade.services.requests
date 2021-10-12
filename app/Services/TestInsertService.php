<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\file;
use App\Http\Requests\UpdateTest;
use Helpers;

class TestInsertService
{

  protected $user;
  //add Image
    public function storeForm( $request) {
      
 try{
      $image= Helpers::saveImage($request->image);
        User::create([
          'name' => $request->name,
          'image' => $image
        ]);
        return redirect()->back();
    } catch(Exception $e) {
        dd($e->getMessage());
        }
      }

    //Image Save Update
    public function updateForm(Request $request) {
 try{ 
      $data=User::find($request->id);
        // global $imagePath;
        if(empty($image)) {
          $image= Helpers::updateImage($request->image , $data->image);
          $data->update([
            'name' => $request->name,
            'image' => $request->hasFile('image') ? $image : $data->image
                ]);
        } else {
             $imagePath =  public_path().'/images/'.$data->image;
            if(File::exists($imagePath)) {
                File::delete($imagePath);
                    }  
                  return redirect()->back();
                }

    } catch(Exception $e) {
       dd($e->getMessage()); 
       }
      } 

}
