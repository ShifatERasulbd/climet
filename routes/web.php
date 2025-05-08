<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralDataController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\InvestigarionsController;
use App\Http\Controllers\InvestigarionContentController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\TeamCategoryController;
use App\Models\general_data;
use App\Models\news;
use App\Models\team;
use App\Models\investigarions;




// API Routes  (Need to move into api.php)
Route::get('/api/about', function () {
    return  App\Models\general_data::where('title', 'About')->get();
});
Route::get('/api/methodology', function () {
    return general_data::where('title', 'Methodology')->get();
});
Route::get('/api/news', function () {
    return news::orderBy('id', 'DESC')->get();
});
Route::get('/api/contacts', function () {
    return response()->json(
        general_data::where('title', 'Contacts')->get()
    );
});
Route::get('/api/investigations', function () {
    return investigarions::with('investigation_contents')
        ->orderBy('id', 'DESC')
        ->get();
});

Route::get('/api/team', function () {
    return response()->json([
        'main_team' => team::where('category_name', 'main_team')->get(),
        'affiliated_researchers' => team::where('category_name', 'Affiliated_researchers')->get(),
        'collaborators' => team::where('category_name', 'Collaborators')->get(),
    ]);
});


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

// team_category All Route
Route::controller(TeamCategoryController::class)->group(function () {
    Route::get('/team_category', 'index')->name('team_category');
    Route::get('/add/team_category', 'create')->name('team_category.add');
    Route::post('/store/team_category', 'store')->name('team_category.store');
    Route::get('/team_category/edit/{id}', 'edit')->name('team_category.edit');
    Route::post('/update/team_category', 'update')->name('team_category.update');
    Route::get('/delete/team_category/{id}', 'destroy')->name('team_category.delete');
   
   
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
