<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::view('/art-projects', 'front.art-projects')->name('art-projects');
Route::view('/creative-writing', 'front.creative-writing')->name('creative-writing');
Route::view('/kids2action', 'front.kids2action')->name('kids2action');
Route::view('/stem4girls', 'front.stem4girls')->name('stem4girls');
Route::view('/leardership-workshop', 'front.workshop')->name('workshop');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
