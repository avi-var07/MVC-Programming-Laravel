<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//without compact
// Route::get('/student/{id}', function ($id) {
//     $name="Aviral Varshney";
//     $course="B.Tech";
//     $contact="8687883676";
//     $address="UTTAR PRADESH";
//     $status="Active";
//     return view('idcard',['id'=>$id, 'name'=>$name,'course'=>$course, 'contact'=>$contact, 'address'=>$address, 'status'=>$status]);
// });

//using compact:
// Route::get('/student/{id}', function ($id) {
//     $name="Aviral Varshney";
//     $course="B.Tech";
//     $contact="8687883676";
//     $address="UTTAR PRADESH";
//     $status="Active";
//     $percentage=86;
//     $student_list= ["Arsh", "Vanisha",  "Ritik"];
//     return view('idcard',compact('id', 'name','course', 'contact', 'address', 'status', 'percentage', 'student_list'));
// });

//with chaining:
Route::get('/student/{id}', function ($id) {
    $student_list=["Arsh", "Vanisha", "Ritik"];
    return view('idcard')
        ->withId($id)
        ->withName('Aviral Varshney')
        ->withCourse('B.Tech CSE')
        ->withContact('8687883676')
        ->withAddress('Punjab, India')
        ->withStatus('Active')
        ->withPercentage('86')
        ->withStudentList($student_list);
});


//attaching a header to the response
//to provide additional information about the response, we can attach headers to the response,
// Headers are key-value pairs that provide metadat about the response , such as content type, developer-name,etc.

Route::get('/myheader', function(){
    return response("This route will show Custom Headers Right Click->inspect->network")
    ->header('Developer-Name','Ritik')->header('Developed-in-year','2026')
    ->header('Site-Description','This website is developed for interaction with LPU Students');
});
