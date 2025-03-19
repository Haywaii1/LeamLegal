<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactController;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/article', [HomeController::class, 'article'])->name('article');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact'); //
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send'); 

Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');


Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');




