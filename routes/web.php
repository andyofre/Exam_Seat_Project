<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/class', [\App\Http\Controllers\ExamclassController::class, 'index'])->name('class');
Route::get('/create/class', [\App\Http\Controllers\ExamclassController::class, 'create'])->name('create.class');

Route::post('/class/create', [\App\Http\Controllers\ExamclassController::class, 'store'])->name('create.store');


Route::get('/registration/create', [\App\Http\Controllers\StudentController::class, 'index'])->name('registration');
Route::post('/registration', [\App\Http\Controllers\StudentController::class, 'store'])->name('register.store');




Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin')->group(function () {

    Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
    Route::get('/student', [\App\Http\Controllers\AdminController::class, 'students'])->name('students');

    // All supervisors operation by the super admin
    Route::get('/supervisors', [\App\Http\Controllers\AdminController::class, 'supervisors'])->name('supervisors');
    Route::get('/create/supervisor', [\App\Http\Controllers\SupervisorController::class, 'create'])->name('create.supervisor');
    Route::post('/supervisor/store', [\App\Http\Controllers\SupervisorController::class, 'store'])->name('store.supervisor');

    // Adding halls by admin


    Route::get('/hall', [\App\Http\Controllers\HallController::class, 'index'])->name('hall');
    Route::get('/hall/create', [\App\Http\Controllers\HallController::class, 'create'])->name('create.hall');
    Route::post('/hall/store', [\App\Http\Controllers\HallController::class, 'store'])->name('store.hall');

    // Adding adding courses

    Route::get('/course', [\App\Http\Controllers\CourseController::class, 'index'])->name('course');
    Route::get('/course/create', [\App\Http\Controllers\CourseController::class, 'create'])->name('create.course');
    Route::post('/course/store', [\App\Http\Controllers\CourseController::class, 'store'])->name('store.course');

    Route::get('/faculty', [\App\Http\Controllers\FacultyController::class, 'index'])->name('faculty');
    Route::get('/faculty/create', [\App\Http\Controllers\FacultyController::class, 'create'])->name('create.faculty');
    Route::post('/faculty/store', [\App\Http\Controllers\FacultyController::class, 'store'])->name('store.faculty');

    Route::get('/department', [\App\Http\Controllers\DepartmentController::class, 'index'])->name('department');
    Route::get('/department/create', [\App\Http\Controllers\DepartmentController::class, 'create'])->name('create.department');
    Route::post('/department/store', [\App\Http\Controllers\DepartmentController::class, 'store'])->name('store.department');

    Route::get('/exam/schedule', [\App\Http\Controllers\ExamController::class, 'index'])->name('schedule');
    Route::get('/exam/create/schedule', [\App\Http\Controllers\ExamController::class, 'create'])->name('create.schedule');
    Route::post('exam/schedule/store', [\App\Http\Controllers\ExamController::class, 'store'])->name('store.schedule');





});
// Admin  protection of operations start's here

// Admin dashboard protection of middleware start's here
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});


Route::middleware(['auth','supervisor', 'admin'])->prefix('supervisor')->name('supervisor')->group(function () {

    Route::get('/dashboard',  [App\Http\Controllers\SupervisorController::class, 'index'])->name('dashboard');

});






Route::middleware(['auth','student', 'admin'])->prefix('student')->name('student')->group(function () {

    Route::get('/dashboard',  [App\Http\Controllers\StudentController::class, 'dashboard'])->name('dashboard');
});


