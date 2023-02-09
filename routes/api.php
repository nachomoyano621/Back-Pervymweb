<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PersonaController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
return $request->user();
});

// Auth apis
Route::post('/register', [RegisterController::class,'register']);
Route::post('/login', [LoginController::class,'login']);
Route::post('/logout',  [LoginController::class,'logout']);

//LUEGO DESCOMENTAR ESTO
//Route::group(['middleware' => 'auth:sanctum'], function () {



    // Users api
Route::get('/user/index', [UserController::class,'index']);
Route::post('/user/store', [UserController::class,'store']);
Route::post('/user/edit', [UserController::class,'edit']);
Route::put('/user/update/{id}', [UserController::class,'update']);
Route::post('user/destroy/{id}', [UserController::class,'destroy']);
Route::get('/user/show/{id}', [UserController::class,'show']);

// Persona api


Route::get('/persona/index/',[PersonaController::class,'index']);
Route::post('/persona/store', [PersonaController::class,'store']);
Route::get('/persona/edit/{id}', [PersonaController::class,'edit']);
Route::put('/persona/update/{id}', [PersonaController::class,'update']);
Route::delete('persona/destroy/{id}', [PersonaController::class,'destroy']);
Route::get('/persona/show/{id}', [PersonaController::class,'show']);
Route::post('/persona/buscardni', [PersonaController::class,'buscardni']);
Route::post('/persona/buscarnombre', [PersonaController::class,'buscarnombre']);




Route::get('/', function () {
    return view('app');
});


// Roles api
//Route::get('/roles/index', [RolController::class,'index']);

