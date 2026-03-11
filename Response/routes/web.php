<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); //also configured Welcome with bootstrap
});
Route::get('/AboutUs', function () {
    return response()->view('aboutUs'); //chaining with view
});
Route::get('/download-file', function () {
    return response()->download(public_path("/images/Molecule.jpg")); //chaining with download
});
Route::get('/open-ums', function () {
    return response()->redirectTo("https://ums.lpu.in/lpuums"); //chaining with redirect
});
Route::get('/admin', function () {
    return response()->redirectTo("/student"); //chaining with redirect to different route
});

Route::get('/hello', function () {
    return response("<h1 style='color:green'>Welcome to this World</h1>"); //added styling
});
    
Route::get('/json-response', function () {
    $data=["name"=>"Aviral", "age"=>"21"];
    return response()->json($data); //chaining with json
});
        