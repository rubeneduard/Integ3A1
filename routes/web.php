<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\DashboardController;
use Symfony\Component\HttpKernel\Profiler\Profile;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//Route::get('/', function () {
  //  return view('welcome');
//});


Route::get('/', [DashboardController::class , 'index'])->name('dashboard');

Route::post('/idea', [IdeaController::class , 'store'])->name('idea.create');

Route::get('/terms', function () {
    return view('terms');
});