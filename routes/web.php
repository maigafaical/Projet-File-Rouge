<?php
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\UsersController;
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
    return view('welcome');
});

Route::get('/acceuil', function () {
    return view('acceuil');
});

Route::get('loginadmin', function () {
    return view('loginadmin');
});

Route::get('/register', function () {
    return view('Authentification.register');
});


Route::get('/dashboard', function () {
    return view('dashboardadmin');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/contact', [ContactController::class, 'contactpost'])->name('contactpost');

Route::get('dashboardadmin', [AuthentificationController::class, 'index'])->name('dashboardadmin');

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::get('acceuil', [AuthentificationController::class, 'acceuil'])->name('acceuil');

Route::get('register', [AuthentificationController::class, 'register'])->name('register');

Route::post('loginadmin', [AuthentificationController::class, 'login'])->name('loginadmin');
                
Route::delete('logoutadmin',[AuthentificationController::class, 'logout'] )->name('logoutadmin');

Route::resource('demandes', DemandeController::class);
Route::resource('users', UsersController::class);
Route::get('supprimer-users/{id}', [UsersController::class, 'destroy']);
Route::get('supprimer-demandes/{id}', [DemandeController::class, 'destroy']);


