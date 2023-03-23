<?php

use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
// View all projects
Route::get('/project', [ProjectController::class, 'show'])->name('project');
// Create a project
Route::post('/project/create', [ProjectController::class, 'store'])->name('createProject');
// Update Project
Route::post('/project/update', [ProjectController::class, 'update'])->name('updateProject');
// Delete a project
Route::post('/project/delete', [ProjectController::class, 'destroy']);

Route::get('/project/detail/{id}', [ProjectController::class, 'detail'])->name('projectDetail');

Route::get('project/{id1}/milestone/detail/{id2}', [MilestoneController::class, 'detail'])->name('milestoneDetail');

// View all milestone
Route::get('/milestone/all', [MilestoneController::class, 'show'])->name('milestone');
// Create a milestone
Route::post('/milestone/create', [MilestoneController::class, 'create']);
// Update milestone
Route::post('/milestone/update', [MilestoneController::class, 'update']);
// Delete milestone
Route::post('/milestone/delete', [MilestoneController::class, 'destroy']);

});

require __DIR__.'/auth.php';
