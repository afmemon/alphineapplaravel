<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


use App\Http\Livewire\Students;
use App\Http\Controllers\EmployeesController;

Route::get('/', Students\Index::class)->name('students.index');
Route::get('/create', Students\create::class)->name('students.create');
Route::get('/students/{student}', Students\Show::class)->name('students.show');
Route::get('/students/{student}/edit', Students\Edit::class)->name('students.edit');


Route::get('/user/{id}', [UserController::class, 'show']);
Route::get("/employeevaluablesale", [EmployeesController::class, "index"])->name("employeessales");
Route::get("/scoreranking", [EmployeesController::class, "rankingRecords"])->name("rankingRecords");
