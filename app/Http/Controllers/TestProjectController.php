<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateTest;
use App\Models\User;
use Helpers;
use App\Services\TestInsertService;
class TestProjectController extends Controller
{
    //view Form
    public function index() {
        return view('testForm');
    }
    //store Data in Database
    public function store(StoreUser  $request ,TestInsertService $data)
    {
        $input = $request->all();
        $data->storeForm($request);
           return redirect()->back()->with('success', 'User created successfully.');
    }
    
  //show Record
    public function showRecord() {
        $users = User::all();
        return view('showrecord', compact('users'));
    }
   //Edit Record
    public function editRecord($id) {
        $allrecord= User::find($id);
        return view('testFormUpdate', compact('allrecord'));
    }

  //Update Record
    public function updateForm(UpdateTest $request,TestInsertService $data) {

       $data->updateForm($request);

           return  redirect('showrecord')->with('success', 'User updated successfully.');
    }

}
