<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


//get methods
// Route::get('/', function () {
//     return view('welcome');
// });

// main page
Route::get('/employee/list',[EmployeeController::class,"showEmployee"]);
Route::get('/employee/detail/{id}',[EmployeeController::class,"detail"]);

//employee delete
Route::get('/employee/delete/{id}',[EmployeeController::class,"delete"])->name('employee.delete');

//employee edit and update
Route::get('/employee/update/{id}',[EmployeeController::class,"edit"])->name("employee.edit");
Route::post('/employee/update/{id}',[EmployeeController::class,"update"])->name('employee.update');

// employee create
Route::get('/employee/add',[EmployeeController::class,'add']);
Route::post('/employee/add',[EmployeeController::class,'register']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// admin@gmail.com
// admin123

