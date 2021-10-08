<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Helpers;

class TestInsertService
{

  protected $user;
    public function storeForm( $request) {
        $image= Helpers::saveImage($request->image);
        User::create([
          'name' => $request->name,
          'image' => $image
        ]);
        return back();
    }
    public function updateForm( $request, $id) {
        $data=User::find($id);
        dd($data);
      $image= Helpers::updateImage($request->image , $data->image);
      $data->update([
        'name' => $request->name,
        'image' => $image
      ]);
      return back();
  }


}
