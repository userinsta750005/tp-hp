<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminPagesController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DoctorPagesController;

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

//Admin
Route::get('/loginAdmin', [AdminPagesController::class, 'loginAdmin'])->name('loginAdmin');
Route::get('/dashboardAdmin', [AdminPagesController::class, 'dashboardAdmin'])->middleware('auth');
Route::get('/logoutAdmin', [AdminPagesController::class, 'logout']);
Route::post('/authenticate', [AdminPagesController::class, 'authenticate']);

Route::get('/patient/patientAddAdmin', [AdminPagesController::class, 'patientAdd']);

//Doctor
Route::get('/loginDocteur', [DoctorPagesController::class, 'loginDocteur'])->name('loginDocteur');
Route::get('/dashboardDocteur', [DoctorPagesController::class, 'dashboardDocteur'])->middleware('auth');
Route::get('/logoutDocteur', [DoctorPagesController::class, 'logout']);
Route::post('/authenticate', [DoctorPagesController::class, 'authenticate']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
