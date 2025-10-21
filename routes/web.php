<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'create'])->name('register.form');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
// Route::get('/register', function () {
//     return view('register');
// })->name('register');
  

// Route::get('/register', function () {
//     return view('register');
// })->name('register.form');

// Route::post('/register', function (Request $request) {
//     // You can print submitted data for now
//     dd($request->all());
//     return back()->with('success', 'Registration successful!');
// })->name('register.store');

Route::get('/', function () {
    return view('welcome');
});
