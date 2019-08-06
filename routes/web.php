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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('schools', 'SchoolController');

/*

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/teacher', 'TeacherController@teacher')
    ->middleware('is_teacher')
    ->name('teacher');

Route::get('/owner', 'OwnerController@owner')
    ->middleware('is_owner')
    ->name('owner');

    */

//Ajax Routes

Route::post('/updateSchoolStatus', 'SchoolController@updateSchoolStatus');
Route::post('/deleteSchool', 'SchoolController@deleteSchool');
Route::post('/updateSchool', 'SchoolController@updateSchool');



//routes for school admin dashboard

Route::get('/schoolAdmin/{school}', 'SchoolController@showForAdmin');

Route::get('/schoolAdmin/{school}/settings/general', 'SchoolController@edit');

Route::get('/schoolAdmin/{school}/settings/payments', 'SchoolController@schoolPayments');

Route::get('/schoolAdmin/{school}/users/students', 'SchoolController@schoolStudents');

Route::get('/schoolAdmin/{school}/users/owners', 'SchoolController@schoolOwners');

Route::get('/schoolAdmin/{school}/users/teachers', 'SchoolController@schoolTeachers');

Route::get('/schoolAdmin/{school}/sales/transactions', 'SchoolController@schoolTransactions');

Route::get('/schoolAdmin/{school}/sales/statements', 'SchoolController@schoolStatements');

/*

Route::get('/schoolAdmin/{school}/courses', 'CourseController@coursesForAdmin');

Route::get('/schoolAdmin/{school}/courses/{course}/information', 'CourseController@showForAdmin');

Route::get('/schoolAdmin/{school}/courses/{course}/pages', 'CourseController@coursePages');

Route::get('/schoolAdmin/{school}/courses/{course}/curriculum', 'CourseController@courseCurriculum');

Route::get('/schoolAdmin/{school}/courses/{course}/pricing', 'CourseController@coursePricing');

Route::get('/schoolAdmin/{school}/courses/{course}/certificate', 'CourseController@courseCerficate');
*/
