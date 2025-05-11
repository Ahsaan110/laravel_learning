<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ahsan',function(){
    return view('homepage');
});

Route::group(['prefix'=>'info'],function(){
    Route::get('std/{id}/{name}',function($id,$name){
        return view('ahsan', compact('id','name'));
    });
    Route::get('fac',function(){
        return "This is faculty info";
    });
});


Route::get('contactus',function(){
    return view('contactus');
});

// passing data through controller
Route::get('stdlist',[studentController::class,'index']);

// Grouping the controller
Route::controller(studentController::class)->group(function(){
    // Route::get('contactus','contact_controller');
    Route::get('contactus/{loc}','contact_controller');

    Route::get('aboutus','about_us_controller');
});

