<?php

use App\Http\Controllers\ContactUsController;
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
    return view('index');
})->name('homepage');

Route::get('/aboutus', function () {
    return view('about');
})->name('aboutus');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contactus', function () {
    return view('contact');
})->name('contactus');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::resource('contact', ContactUsController::class);
Route::post('/contact/sendEmail', [ContactUsController::class, 'sendEmail'])->name('contact.sendEmail');
