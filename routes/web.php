<?php

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('verified');
Route::get('/profile/view', 'ProfileController@profile')->name('profile.view')->middleware('verified');
Route::post('/user/profile/created', 'ProfileController@profileCreate')->name('profile.created')->middleware('verified');

Route::get('/project/add', 'AddProjectController@index')->name('project.add')->middleware('verified');
Route::post('/project/add/save', 'AddProjectController@projectAdd')->name('project.add.save')->middleware('verified');
Route::get('/project/list', 'AddProjectController@projectList')->name('project.list.view')->middleware('verified');
Route::get('/project/edit/{id}', 'AddProjectController@editProjectView')->name('project.edit.view')->middleware('verified');
Route::post('/project/update/{id}', 'AddProjectController@updateProject')->name('project.edit.submit')->middleware('verified');
Route::get('/project/delete/{id}', 'AddProjectController@deleteProject')->name('project.delete')->middleware('verified');
Route::get('/employes', 'EmployeeController@index')->name('employes.view')->middleware('verified');
Route::post('/employes/add', 'EmployeeController@employeeAdd')->name('employes.add')->middleware('verified');
Route::get('/employes/delete/{id}', 'EmployeeController@deleteEmployee')->name('employes.delete')->middleware('verified');
Route::get('/employes/update/view/{id}', 'EmployeeController@updateEmployeeView')->name('employes.update.view')->middleware('verified');
Route::post('/employes/update/{id}', 'EmployeeController@updateEmployee')->name('employes.update')->middleware('verified');

Route::get('/employes/salary/list', 'SalarySheetController@index')->name('employes.salary.list')->middleware('verified');
Route::get('/salary/payment/details/{id}', 'SalarySheetController@employeeDetails')->name('employes.salary.details.view')->middleware('verified');

Route::get('/employes/salary/test', 'SalarySheetController@test')->name('employes.salary.test')->middleware('verified');


// Route::get('/api', 'ProfileController@api')->name('view.api')->middleware('verified');
