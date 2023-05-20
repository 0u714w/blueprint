<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScreenerController;


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

Route::get('/screener', [ScreenerController::class, 'show'])->name('screener');
Route::post('/score-assessments', [ScreenerController::class, 'scoreAssessments']);


