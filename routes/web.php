<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralDataController;
Route::get('/', function () {
    return view('frontend.index');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
Route::get('/admin', function () {
    return view('backend.index');
});


  // About All Route
  Route::controller(GeneralDataController::class)->group(function () {
    Route::get('/about', 'About')->name('about');
    Route::get('/add/about', 'AboutAdd')->name('about.add');
    Route::post('/store/about', 'AboutStore')->name('about.store');
    Route::get('/about/edit/{id}', 'AboutEdit')->name('about.Edit');
    Route::post('/update/about', 'AboutUpdate')->name('about.update');
    Route::get('/delete/about/{id}', 'AboutDelete')->name('about.delete');
    
});


  // Mehodology All Route
  Route::controller(GeneralDataController::class)->group(function () {
    Route::get('/mehodology', 'Methodology')->name('methodhology');
    Route::get('/add/mehodology', 'addMethodology')->name('about.mehodology');
    Route::post('/store/methodology', 'MethodologyStore')->name('methodology.store');
    Route::get('/methodology/edit/{id}', 'MethodologyEdit')->name('methodology.Edit');

    Route::post('/update/methodology', 'MethodologyUpdate')->name('methodology.update');
    Route::get('/delete/methodology/{id}', 'MethodologyDelete')->name('methodology.delete');
  
    
});



// Contact All Route
Route::controller(GeneralDataController::class)->group(function () {
    Route::get('/contact', 'Contact')->name('contact');
    Route::get('/add/contact', 'addContact')->name('contact.add');
    Route::post('/store/contact', 'ContactStore')->name('contact.store');
    Route::get('/contact/edit/{id}', 'ContactEdit')->name('contact.edit');
    Route::post('/update/contact', 'ContactUpdate')->name('contact.update');
    Route::get('/delete/contact/{id}', 'MethodologyDelete')->name('contact.delete');
  
    
});




 



});

require __DIR__.'/auth.php';
