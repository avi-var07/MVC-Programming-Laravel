<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/student/{id}', function ($id) {
    $name="Aviral Varshney";
    $course="B.Tech";
    $contact="8687883676";
    $address="UTTAR PRADESH";
    $status="Active";
    return view('idcard',['id'=>$id, 'name'=>$name,'course'=>$course, 'contact'=>$contact, 'address'=>$address, 'status'=>$status]);
});