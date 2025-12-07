<?php

use App\Http\Controllers\Exercicevalidcontroller;
use App\Http\Controllers\Exercontroller;
use App\Http\Controllers\exercontroller as ControllersExercontroller;
use App\Http\Controllers\Exercontroller as HttpControllersExercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Formcontroller;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post('/trait',[Formcontroller::class , 'traitement']);
############################
// Route::get('/', function () {
//     return view('forminformation');
// });
// Route::post('/info',[Exercontroller::class , 'traitement']);
Route::get('/',function(){
    return view('exercicefrom');
});
Route::post('/trait',[Exercicevalidcontroller::class,"validation"]);
