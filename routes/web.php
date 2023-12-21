<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FonctionnaireController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route:: get('/add',[FonctionnaireController::class,'ajouter']);
Route:: get('/list',[FonctionnaireController::class,'afficher'])->name("index");

Route::post('/addfunc',[FonctionnaireController::class,'ajouterfunc']);

Route::get('/delete/{id}',[FonctionnaireController::class,'supprimer']);

Route::get("/update/{id}",[FonctionnaireController::class , "voir"]);

Route::post("/updatefunc/{id}",[FonctionnaireController::class , "modifier"]);




