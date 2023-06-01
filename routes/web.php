<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UtilisateurController;

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
    return view('accueil.index');
})->name('index');
Route::get('/etudiant-{id}' , function() {
    return view('accueil.etudiant');
})->name('accueil.etudiant');
Route::get('/prof-{id}' , function() {
    return view('accueil.prof');
});
Route::get('/formation' , function(){
    return view('accueil.formation');
})->name('formation');
Route::get('/form' , function(){
    return view('accueil.form');
})->name('form');

Route::controller(AuthController::class)->group(function(){
    Route::post('/register' , 'register')->name('register');
    Route::post('/connect' , 'doLogin')->name('connect');
});

Route::get('/etatInscription' , function(){
    abort(403);
})->name('etat');

Route::prefix('admin')->controller(AdminController::class)->group(function(){

    Route::get('/' , 'dashboard' )->name('accueil.dashboard');
    Route::get('inscription' , 'inscription')->name('admin.inscription');
    Route::get('bulletin' , 'bulletin')->name('bulletin');
    Route::get('list-{classe}' , 'liste')->name('list');
    Route::get('delib' , 'delib')->name('admin.delib');
    Route::get('notes' , 'notes')->name('admin.notes');
    Route::get('prof' , 'prof')->name('admin.prof');


    // Route a supprimer
    Route::get('test' , [AdminController::class , 'test']);
    // Route a supprimer
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
