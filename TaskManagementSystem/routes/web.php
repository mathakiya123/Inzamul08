<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AddEmployeeController;
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
// add task manager routing
Route::get('/', [TaskController::class, 'index']);
Route::post('/', [TaskController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login',[RegisterController::class,'login']);
Route::post('/login',[RegisterController::class,'logincheck']);


//      Route::get('/login', [RegisterController::class, 'login']);
// contact us page routing
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'store']);
// add task from user panel 
Route::post('/contact-us', [ContactController::class, 'store']);
// manage task from admin   
Route::get('/dashboard', [TaskController::class, 'shwall']);
Route::post('/dashboard', [TaskController::class, 'store']);
Route::get('/dashboard/{id}', [TaskController::class, 'destroy']);
Route::get('/dashboard/edit-task/{id}', [TaskController::class, 'edit']);
Route::post('/dashboard/edit-task/{id}', [TaskController::class, 'update']);
// admin routing
Route::get('/admin-login', [AdminLoginController::class, 'index']);
Route::get('/admin-login/dashboard', [AdminDashboardController::class, 'index']);
Route::get('/admin-login/manage-contact', [ContactController::class, 'show']);
Route::get('/admin-login/manage-contact/{id}', [ContactController::class, 'destroy']);
// add employee
Route::get('/admin-login/add-employee', [AddEmployeeController::class, 'index']);
Route::post('/admin-login/add-employee', [AddEmployeeController::class, 'store']);
Route::get('/admin-login/manage-employee', [AddEmployeeController::class, 'show']);
Route::get('/admin-login/manage-employee/{id}',[AddEmployeeController::class, 'destroy']);
Route::get('/admin-login/edit-employee/{id}', [AddEmployeeController::class, 'edit']);
Route::post('/admin-login/edit-employee/{id}', [AddEmployeeController::class, 'update']);

// manage all task 
Route::get('/admin-login/manage-task', [TaskController::class, 'shwtask']);
Route::get('/admin-login/manage-task/{id}', [TaskController::class, 'destroy_data']);
// manage all registered users in admin
Route::get('/admin-login/manage-users', [RegisterController::class, 'manageuser']);
Route::get('/admin-login/manage-users/{id}', [RegisterController::class, 'destroy']);