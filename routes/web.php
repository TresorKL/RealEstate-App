<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    $properties=Property::with('seller', 'media')->orderBy('created_at', 'desc')->get();
    $request->session()->put("properties", $properties); ;
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    session()->flush();
    return redirect('/');
});

Route::get('/property-form', function () {
    return view('property-form');
});

Route::get('/admin', function (Request $request) {
    $properties=Property::with('seller', 'media')->orderBy('created_at', 'desc')->get();
    $request->session()->put("properties", $properties); ;
    if($request->session()->get("admin")!=null){
        return view("admin");
    }else{
        return redirect("/login");
    }
});

Route::post('/delete/{id}',[PropertyController::class,'delete']);
Route::post('login/',[AuthController::class,'login']);
Route::post('/add-property',[PropertyController::class,'addProperty']);
Route::post('/filter-properties',[PropertyController::class,'filterProperties']);
Route::get('/filter-properties', function () {
    return view('welcome');
});
Route::get('/property/{id}',[PropertyController::class,'getProperty']);


