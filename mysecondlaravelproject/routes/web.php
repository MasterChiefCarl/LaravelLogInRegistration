<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered;
use Monolog\Registry;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





//Route Views



//Route Controllers 


Route::get('/', function () {return view('welcome');})->name('welcome');



Route::get('/login', function () {return view('auth.login');})->name('login');
Route::get('/register', function () {return view('auth.register');})->name('register');

Route::post('/create', [RegisterController::class, 'register'])->name('auth.create');
Route::post('/loginAttempt', [LoginController::class, 'loginAttempt'])->name('auth.login');

Route::middleware('auth')->group(function () {
    //Logout the Auth User
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


    //CRUD view students - frontend views
    Route::get('/home', function () {return view('home');})->name('home');
    Route::get('students/all',[StudentController::class,'showAll'])->name('students.all');
    Route::get('student/{id}/info', [StudentController::class, 'show'])->name('student.info');
    Route::get('student/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
    Route::get('student/create', [StudentController::class, 'create'])->name('students.create');
    Route::get('student/{id}/delete', [StudentController::class, 'delete'])->name('student.delete');


    //CRUD process students - backend 
    Route::post('student/create', [StudentController::class, 'store'])->name('students.save');
    Route::post('student/{id}/edit', [StudentController::class, 'update'])->name('student.update');
    Route::get('student/{id}/destroy', [StudentController::class, 'destroy'])->name('student.remove');
});
