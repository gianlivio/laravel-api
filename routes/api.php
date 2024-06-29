<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
// */

// elimino o commento questa route di default


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// passo l'array associativo al json con una di queste due sintassi

// Route::get('/test', function() {
//     return response()->json([
//         'name' => 'Pippo',
//         'role' => 'student'
//     ]);
// });

// oppure

Route::get('/projects', [ProjectController::class, 'index']);