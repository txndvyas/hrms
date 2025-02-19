<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Auth::routes();
Route::post('/auth/register', [RegisterController::class, 'create']);
Route::post('/auth/login', [LoginController::class, 'login']);
Route::post('/reset-password', [ForgetPasswordController::class, 'forgetPassword']);

Route::post('/auth/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware(['auth:sanctum'])->group(function () {

    //Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Department
    Route::get('/department', [DepartmentController::class, 'index'])->name('company.department');
    Route::post('/department', [DepartmentController::class, 'store'])->name('department.store');
    Route::put('/department/edit/{uuid}', [DepartmentController::class, 'update'])->name('department.update');
    Route::get('/department/{uuid}', [DepartmentController::class, 'show'])->name('department.show'); // Add this line
    Route::delete('/department/{uuid}', [DepartmentController::class, 'destroy'])->name('department.destroy');

    //Designation
    Route::get('/designation', [DesignationController::class, 'index']);
    Route::post('/designation', [DesignationController::class, 'store']);
    Route::put('/designation/edit/{uuid}', [DesignationController::class, 'update']);
    Route::get('/designation/{uuid}', [DesignationController::class, 'show']);
    Route::delete('/designation/{uuid}', [DesignationController::class, 'destroy']);

    //Branch
    Route::get('/branch', [BranchController::class, 'index']);
    Route::post('/branch', [BranchController::class, 'store']);
    Route::put('/branch/edit/{uuid}', [BranchController::class, 'update']);
    Route::get('/branch/{uuid}', [BranchController::class, 'show']);
    Route::delete('/branch/{uuid}', [BranchController::class, 'destroy']);
});
