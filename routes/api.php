<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiApiMemberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/total-member', [ApiApiMemberController::class ,'getTotalMembers'])->name('api.totalmember');
Route::get('/v1/member-details/{id}', [ApiApiMemberController::class ,'getMemberDetails'])->name('api.getMemberDetails');
Route::get('/v1/all-members', [ApiApiMemberController::class ,'getAllMembers'])->name('api.getAllMembers');
Route::get('/v1/members/{offset}/{limit}', [ApiApiMemberController::class ,'getMembers'])->name('api.getMembers');
