<?php

use App\Http\Controllers\Backend\AuthenticateController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\LeaveController;
use App\Http\Controllers\Backend\PriorityController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\TaskController;
use App\Http\Controllers\Backend\StickyNoteController;
use App\Http\Controllers\Backend\AnnouncementController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\CurrencyController;
use App\Http\Controllers\Backend\EmployeeLetterController;
use App\Http\Controllers\Backend\SubDepartmentController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\StateController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Middleware\backendMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/department-list', [DepartmentController::class, 'index'])->name('department_list')->middleware([backendMiddleware::class]);
Route::get('/department/create', [DepartmentController::class, 'create'])->name('department_create')->middleware([backendMiddleware::class]);
Route::post('/department/store', [DepartmentController::class, 'store'])->name('department_store')->middleware([backendMiddleware::class]);
Route::get('/department/remove/{id}', [DepartmentController::class, 'delete'])->name('department_delete')->middleware([backendMiddleware::class]);
Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department_edit')->middleware([backendMiddleware::class]);
Route::post('/department/update/{id}', [DepartmentController::class, 'update'])->name('department_update')->middleware([backendMiddleware::class]);

Route::get('/leave-list', [LeaveController::class, 'index'])->name('leave_list')->middleware([backendMiddleware::class]);
Route::get('/leave/create', [LeaveController::class, 'create'])->name('leave_create')->middleware([backendMiddleware::class]);
Route::post('/leave/store', [LeaveController::class, 'store'])->name('leave_store')->middleware([backendMiddleware::class]);
Route::get('/leave/remove/{id}', [LeaveController::class, 'delete'])->name('leave_delete')->middleware([backendMiddleware::class]);
Route::get('/leave/edit/{id}', [LeaveController::class, 'edit'])->name('leave_edit')->middleware([backendMiddleware::class]);
Route::post('/leave/update/{id}', [LeaveController::class, 'update'])->name('leave_update')->middleware([backendMiddleware::class]);        

Route::get('/priority-list', [PriorityController::class, 'index'])->name('priority_list')->middleware([backendMiddleware::class]);
Route::get('/priority/create', [PriorityController::class, 'create'])->name('priority_create')->middleware([backendMiddleware::class]);
Route::post('/priority/store', [PriorityController::class, 'store'])->name('priority_store')->middleware([backendMiddleware::class]);
Route::get('/priority/remove/{id}', [PriorityController::class, 'delete'])->name('priority_delete')->middleware([backendMiddleware::class]);
Route::get('/priority/edit/{id}', [PriorityController::class, 'edit'])->name('priority_edit')->middleware([backendMiddleware::class]);
Route::post('/priority/update/{id}', [PriorityController::class, 'update'])->name('priority_update')->middleware([backendMiddleware::class]);

Route::get('/role-list', [RoleController::class, 'index'])->name('role_list')->middleware([backendMiddleware::class]);
Route::get('/role/create', [RoleController::class, 'create'])->name('role_create')->middleware([backendMiddleware::class]);
Route::post('/role/store', [RoleController::class, 'store'])->name('role_store')->middleware([backendMiddleware::class]);
Route::get('/role/remove/{id}', [RoleController::class, 'delete'])->name('role_delete')->middleware([backendMiddleware::class]);
Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role_edit')->middleware([backendMiddleware::class]);
Route::post('/role/update/{id}', [RoleController::class, 'update'])->name('role_update')->middleware([backendMiddleware::class]);

Route::get('/task-list', [TaskController::class, 'index'])->name('task_list')->middleware([backendMiddleware::class]);
Route::get('/task/create', [TaskController::class, 'create'])->name('task_create')->middleware([backendMiddleware::class]);
Route::post('/task/store', [TaskController::class, 'store'])->name('task_store')->middleware([backendMiddleware::class]);
Route::get('/task/remove/{id}', [TaskController::class, 'delete'])->name('task_delete')->middleware([backendMiddleware::class]);
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('task_edit')->middleware([backendMiddleware::class]);
Route::post('/task/update/{id}', [TaskController::class, 'update'])->name('task_update')->middleware([backendMiddleware::class]);    

Route::get('/sticky-note-list', [StickyNoteController::class, 'index'])->name('stickynote_list')->middleware([backendMiddleware::class]);
Route::get('/sticky-note/create', [StickyNoteController::class, 'create'])->name('stickynote_create')->middleware([backendMiddleware::class]);
Route::post('/sticky-note/store', [StickyNoteController::class, 'store'])->name('stickynote_store')->middleware([backendMiddleware::class]);
Route::get('/sticky-note/remove/{id}', [StickyNoteController::class, 'delete'])->name('stickynote_delete')->middleware([backendMiddleware::class]);
Route::get('/sticky-note/edit/{id}', [StickyNoteController::class, 'edit'])->name('stickynote_edit')->middleware([backendMiddleware::class]);
Route::post('/sticky-note/update/{id}', [StickyNoteController::class, 'update'])->name('stickynote_update')->middleware([backendMiddleware::class]);

Route::get('/announcement-list', [AnnouncementController::class, 'index'])->name('announcement_list')->middleware([backendMiddleware::class]);
Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('announcement_create')->middleware([backendMiddleware::class]);
Route::post('/announcement/store', [AnnouncementController::class, 'store'])->name('announcement_store')->middleware([backendMiddleware::class]);
Route::get('/announcement/remove/{id}', [AnnouncementController::class, 'delete'])->name('announcement_delete')->middleware([backendMiddleware::class]);
Route::get('/announcement/edit/{id}', [AnnouncementController::class, 'edit'])->name('announcement_edit')->middleware([backendMiddleware::class]);
Route::post('/announcement/update/{id}', [AnnouncementController::class, 'update'])->name('announcement_update')->middleware([backendMiddleware::class]);

Route::get('/project-list', [ProjectController::class, 'index'])->name('project_list')->middleware([backendMiddleware::class]);
Route::get('/project/create', [ProjectController::class, 'create'])->name('project_create')->middleware([backendMiddleware::class]);
Route::post('/project/store', [ProjectController::class, 'store'])->name('project_store')->middleware([backendMiddleware::class]);
Route::get('/project/remove/{id}', [ProjectController::class, 'delete'])->name('project_delete')->middleware([backendMiddleware::class]);
Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project_edit')->middleware([backendMiddleware::class]);
Route::post('/project/update/{id}', [ProjectController::class, 'update'])->name('project_update')->middleware([backendMiddleware::class]);

Route::get('/currency-list', [CurrencyController::class, 'index'])->name('currency_list')->middleware([backendMiddleware::class]);
Route::get('/currency/create', [CurrencyController::class, 'create'])->name('currency_create')->middleware([backendMiddleware::class]);
Route::post('/currency/store', [CurrencyController::class, 'store'])->name('currency_store')->middleware([backendMiddleware::class]);
Route::get('/currency/remove/{id}', [CurrencyController::class, 'delete'])->name('currency_delete')->middleware([backendMiddleware::class]);
Route::get('/currency/edit/{id}', [CurrencyController::class, 'edit'])->name('currency_edit')->middleware([backendMiddleware::class]);
Route::post('/currency/update/{id}', [CurrencyController::class, 'update'])->name('currency_update')->middleware([backendMiddleware::class]);

Route::get('/employeeletter-list', [EmployeeLetterController::class, 'index'])->name('employeeletter_list')->middleware([backendMiddleware::class]);
Route::get('/employeeletter/create', [EmployeeLetterController::class, 'create'])->name('employeeletter_create')->middleware([backendMiddleware::class]);
Route::post('/employeeletter/store', [EmployeeLetterController::class, 'store'])->name('employeeletter_store')->middleware([backendMiddleware::class]);
Route::get('/employeeletter/remove/{id}', [EmployeeLetterController::class, 'delete'])->name('employeeletter_delete')->middleware([backendMiddleware::class]);
Route::get('/employeeletter/edit/{id}', [EmployeeLetterController::class, 'edit'])->name('employeeletter_edit')->middleware([backendMiddleware::class]);
Route::post('/employeeletter/update/{id}', [EmployeeLetterController::class, 'update'])->name('employeeletter_update')->middleware([backendMiddleware::class]);

Route::get('/sub-department-list', [SubDepartmentController::class, 'index'])->name('subdepartment_list')->middleware([backendMiddleware::class]);
Route::get('/sub-department/create', [SubDepartmentController::class, 'create'])->name('subdepartment_create')->middleware([backendMiddleware::class]);
Route::post('/sub-department/store', [SubDepartmentController::class, 'store'])->name('subdepartment_store')->middleware([backendMiddleware::class]);
Route::get('/sub-department/remove/{id}', [SubDepartmentController::class, 'delete'])->name('subdepartment_delete')->middleware([backendMiddleware::class]);
Route::get('/sub-department/edit/{id}', [SubDepartmentController::class, 'edit'])->name('subdepartment_edit')->middleware([backendMiddleware::class]);
Route::post('/sub-department/update/{id}', [SubDepartmentController::class, 'update'])->name('subdepartment_update')->middleware([backendMiddleware::class]);
Route::get('/sub-department/fetchDropDownSubDepartment/{department_id}', [SubDepartmentController::class, 'fetchDropDownSubDepartment'])->name('subdepartment_fetchDropDownSubDepartment')->middleware([backendMiddleware::class]);

Route::get('/employee-list', [EmployeeController::class, 'index'])->name('employee_list')->middleware([backendMiddleware::class]);
Route::get('/employee-create', [EmployeeController::class, 'create'])->name('employee_create')->middleware([backendMiddleware::class]);
Route::post('/employee-store', [EmployeeController::class, 'store'])->name('employee_store')->middleware([backendMiddleware::class]);
Route::get('/employee/edit/{employee}', [EmployeeController::class, 'edit'])->name('employee_edit')->middleware([backendMiddleware::class]);
Route::get('/employee/remove/{id}', [EmployeeController::class, 'delete'])->name('employee_delete')->middleware([backendMiddleware::class]);
Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee_update')->middleware([backendMiddleware::class]);

Route::get('/country-list', [CountryController::class, 'index'])->name('country_list')->middleware([backendMiddleware::class]);
Route::get('/country-create', [CountryController::class, 'create'])->name('country_create')->middleware([backendMiddleware::class]);
Route::post('/country-store', [CountryController::class, 'store'])->name('country_store')->middleware([backendMiddleware::class]);
Route::get('/country/remove/{id}', [CountryController::class, 'delete'])->name('country_delete')->middleware([backendMiddleware::class]);
Route::get('/country/edit/{id}', [CountryController::class, 'edit'])->name('country_edit')->middleware([backendMiddleware::class]);
Route::post('/country/update/{id}', [CountryController::class, 'update'])->name('country_update')->middleware([backendMiddleware::class]);  

Route::get('/state-list', [StateController::class, 'index'])->name('state_list')->middleware([backendMiddleware::class]);
Route::get('/state-create', [StateController::class, 'create'])->name('state_create')->middleware([backendMiddleware::class]);
Route::post('/state-store', [StateController::class, 'store'])->name('state_store')->middleware([backendMiddleware::class]);
Route::get('/state/remove/{id}', [StateController::class, 'delete'])->name('state_delete')->middleware([backendMiddleware::class]);
Route::get('/state/edit/{id}', [StateController::class, 'edit'])->name('state_edit')->middleware([backendMiddleware::class]);
Route::post('/state/update/{id}', [StateController::class, 'update'])->name('state_update')->middleware([backendMiddleware::class]);
Route::get('/state/fetchDropDownState/{country_id}', [StateController::class, 'fetchDropDownState'])->name('state_fetchDropDownState')->middleware([backendMiddleware::class]);

Route::get('/city-list', [CityController::class, 'index'])->name('city_list')->middleware([backendMiddleware::class]);
Route::get('/city-create', [CityController::class, 'create'])->name('city_create')->middleware([backendMiddleware::class]);
Route::post('/city-store', [CityController::class, 'store'])->name('city_store')->middleware([backendMiddleware::class]);
Route::get('/city/remove/{id}', [CityController::class, 'delete'])->name('city_delete')->middleware([backendMiddleware::class]);
Route::get('/city/edit/{id}', [CityController::class, 'edit'])->name('city_edit')->middleware([backendMiddleware::class]);
Route::post('/city/update/{id}', [CityController::class, 'update'])->name('city_update')->middleware([backendMiddleware::class]);

Route::get('login', [AuthenticateController::class, 'singIn'])->name('login');
Route::post('authenticate', [AuthenticateController::class, 'authetnicateCheck'])->name('authenticate');
Route::get('register', [AuthenticateController::class, 'register'])->name('register');
Route::post('register', [AuthenticateController::class, 'storeUser'])->name('register_store_user');
Route::get('logout', [AuthenticateController::class, 'logout'])->name('logout');

