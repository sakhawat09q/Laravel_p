<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('project/{category}/{id}',[HomeController::class, 'selff'] );
Route::get('view',[HomeController::class, 'vis'] );
Route::get('products',[HomeController::class, 'products'] );
Route::get('create',[CourseController::class, 'create'] );
Route::post('store-course',[CourseController::class,'store']);
Route::get('courses',[CourseController::class,'all']);
Route::get('edit-course/{id}',[CourseController::class,'edit']);
Route::post('update-course/{id}',[CourseController::class,'update']);
Route::get('delete-course/{id}',[CourseController::class,'delete']);








