<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestProjectController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('testview',[TestProjectController::class,'index']);
Route::post('testview.store',[TestProjectController::class,'store']);
Route::get('showrecord',[TestProjectController::class,'showrecord']);
Route::get('editrecord/{id}',[TestProjectController::class,'editRecord']);
Route::post('edit',[TestProjectController::class,'updateForm']);