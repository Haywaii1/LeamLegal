<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PracticeController;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/article', [HomeController::class, 'article'])->name('article');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/practice', [HomeController::class, 'practice'])->name('practice');

Route::get('/litigation', [PracticeController::class, 'litigation'])->name('litigation');
Route::get('/property', [PracticeController::class, 'property'])->name('property');
Route::get('/entertainment', [PracticeController::class, 'entertainment'])->name('entertainment');
Route::get('/technology', [PracticeController::class, 'technology'])->name('technology');
Route::get('/employment', [PracticeController::class, 'employment'])->name('employment');
Route::get('/finance', [PracticeController::class, 'finance'])->name('finance');
Route::get('/energy', [PracticeController::class, 'energy'])->name('energy');
Route::get('/family', [PracticeController::class, 'family'])->name('family');
Route::get('/criminal', [PracticeController::class, 'criminal'])->name('criminal');
Route::get('/immigration', [PracticeController::class, 'immigration'])->name('immigration');
Route::get('/corporate', [PracticeController::class, 'corporate'])->name('corporate');
Route::get('/regulation', [PracticeController::class, 'regulation'])->name('regulation');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact'); //
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');

Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');


Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

