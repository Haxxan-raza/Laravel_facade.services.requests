<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use App\Models\User;
use Helpers;
use App\Services\TestInsertService;
class TestProjectController extends Controller
{
    //
    public function index() {
        return view('testForm');
    }

    public function store(StoreUser  $request ,TestInsertService $data)
    {
        $input = $request->all();
        $data->storeForm($request);
           return back()->with('success', 'User created successfully.');
    }
    
 
    public function updateForm(Request $request,TestInsertService $data , $id) {

       $data->updateForm($request,$id);

           return back()->with('success', 'User updated successfully.');
    }

}
