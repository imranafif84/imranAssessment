<?php

use Illuminate\Support\Facades\Route;
use App\Models\Dropee;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $results = Dropee::orderBy('location', 'asc')->get();
    return view('welcome', compact('results'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
