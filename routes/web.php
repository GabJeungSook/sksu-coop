<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Masterlist;
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
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/masterlist', function () {
    return view('admin.masterlist');
})
    ->middleware(['auth', 'verified'])
    ->name('masterlist');

Route::get('/masterlist-data/{record}', function ($record) {
    $masterlistRecord = Masterlist::findOrFail($record);

    return view('admin.forms.view-masterlist-data', ['record' => $masterlistRecord]);
})
    ->middleware(['auth', 'verified'])
    ->name('view-masterlist-data');

Route::get('/upload', function () {
    return view('admin.upload');
})
    ->middleware(['auth', 'verified'])
    ->name('upload');

Route::get('/reports', function () {
    return view('admin.report');
})
    ->middleware(['auth', 'verified'])
    ->name('report');

Route::get('/inquiry', function () {
    return view('admin.inquiry');
})
    ->middleware(['auth', 'verified'])
    ->name('inquiry');

    Route::get('/settings', function () {
        return view('admin.settings');
    })
        ->middleware(['auth', 'verified'])
        ->name('settings');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
