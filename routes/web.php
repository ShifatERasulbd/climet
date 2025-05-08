<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralDataController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\InvestigarionsController;
use App\Http\Controllers\InvestigarionContentController;
use App\Http\Controllers\dashboardController;
Route::get('/', function () {
    return view('frontend.app');
});
Route::get('/test', function () {
    return view('frontend.index');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

<<<<<<< HEAD
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
=======
    
// Route::get('/admin', function () {
//     return view('backend.index');
// });

Route::get('/admin', [dashboardController::class, 'dashboard'])->name('admin');


  // About All Route
  Route::controller(GeneralDataController::class)->group(function () {
    Route::get('/about', 'About')->name('about');
    Route::get('/add/about', 'AboutAdd')->name('about.add');
    Route::post('/store/about', 'AboutStore')->name('about.store');
    Route::get('/about/edit/{id}', 'AboutEdit')->name('about.Edit');
    Route::post('/update/about', 'AboutUpdate')->name('about.update');
    Route::get('/delete/about/{id}', 'AboutDelete')->name('about.delete');
    
});
>>>>>>> 8073837 (update investigation edit)


  // Mehodology All Route
  Route::controller(GeneralDataController::class)->group(function () {
    Route::get('/mehodology', 'Methodology')->name('methodhology');
    Route::get('/add/mehodology', 'addMethodology')->name('add.mehodology');
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
    Route::get('/delete/contact/{id}', 'ContactDelete')->name('contact.delete');
});




 
// News All Route
Route::controller(NewsController::class)->group(function () {
    Route::get('/news', 'index')->name('news');
    Route::get('/add/news', 'create')->name('news.add');
    Route::post('/store/news', 'store')->name('news.store');
    Route::get('/news/edit/{id}', 'edit')->name('news.edit');
    Route::post('/update/news', 'update')->name('news.update');
    Route::get('/delete/news/{id}', 'destroy')->name('news.delete');
   
});

// team All Route
Route::controller(TeamController::class)->group(function () {
    Route::get('/team', 'index')->name('team');
    Route::get('/add/team', 'create')->name('team.add');
    Route::post('/store/team', 'store')->name('team.store');
    Route::get('/team/edit/{id}', 'edit')->name('team.edit');
    Route::post('/update/team', 'update')->name('team.update');
    Route::get('/delete/team/{id}', 'destroy')->name('team.delete');
   
});


// investigation All Route
Route::controller(InvestigarionsController::class)->group(function () {
    Route::get('/investigation', 'index')->name('investigation');
    Route::get('/add/investigation', 'create')->name('investigation.add');
    Route::post('/store/investigation', 'store')->name('investigation.store');
    Route::get('/investigation/edit/{id}', 'edit')->name('investigation.edit');
    Route::put('/update/investigation/{investigation}', 'update')->name('investigation.update');
    Route::get('/delete/investigation/{id}', 'destroy')->name('investigation.delete');
   
   
});


// investigation_content All Route
Route::controller(InvestigarionContentController::class)->group(function () {
    // Route::get('/investigation', 'index')->name('investigation');
    // Route::get('/add/investigation', 'create')->name('investigation.add');
    // Route::post('/store/investigation', 'store')->name('investigation.store');
    // Route::get('/investigation/edit/{id}', 'edit')->name('investigation.edit');
    Route::post('/update/investigationContent', 'update')->name('investigationContent.update');
    Route::get('/delete/investigationContent/{id}', 'destroy')->name('investigationContent.delete');
   
   
});


});

require __DIR__.'/auth.php';
