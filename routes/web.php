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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('schools', 'SchoolController');

Route::resource('courses', 'CourseController');

Route::resource('categories', 'CategoryController');

Route::resource('pricings', 'PricingController');

Route::resource('sections', 'SectionController');

Route::resource('lessons', 'LessonController');


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
Route::post('/addAuthor', 'SchoolController@addAuthor');
Route::post('/addLecture', 'LessonController@store');
Route::post('/updateLecture', 'LessonController@update');
Route::post('/saveNewPositions', 'LessonController@saveNewPositions');
Route::post('/saveNewSectionPositions', 'LessonController@saveNewSectionPositions');
Route::post('/deleteLecture', 'LessonController@destroy');
Route::post('/addQuiz', 'LessonController@addQuiz');




//routes for school admin dashboard

//school admin dashboard
Route::get('/schoolAdmin/{school}', 'SchoolController@showForAdmin');

//school settings
Route::get('/schoolAdmin/{school}/settings/general', 'SchoolController@edit')->name('schoolSettings');

//school payments
Route::get('/schoolAdmin/{school}/settings/payments', 'SchoolController@schoolPayments')->name('schoolSettings');

//school students
Route::get('/schoolAdmin/{school}/users/students', 'SchoolController@schoolStudents');

//school owners
Route::get('/schoolAdmin/{school}/users/owners', 'SchoolController@schoolOwners');

//school teachers
Route::get('/schoolAdmin/{school}/users/teachers', 'SchoolController@schoolTeachers');

//school transactions from students
Route::get('/schoolAdmin/{school}/sales/transactions', 'SchoolController@schoolTransactions');

//school statements from oschool
Route::get('/schoolAdmin/{school}/sales/statements', 'SchoolController@schoolStatements');


//routes for course admin dashboard

//course creation
Route::get('/schoolAdmin/{school}/courses/create', 'CourseController@createAdmin')->name('course');

//courses admin index
Route::get('/schoolAdmin/{school}/courses', 'CourseController@indexForAdmin')->name('course');

//course information
Route::get('/schoolAdmin/{school}/courses/{course}/information', 'CourseController@information')->name('course');

//course pages
Route::get('/schoolAdmin/{school}/courses/{course}/pages', 'CourseController@pages')->name('course');

//course curriculum
Route::get('/schoolAdmin/{school}/courses/{course}/curriculum', 'CourseController@curriculum')->name('course');
Route::get('/schoolAdmin/{school}/courses/{course}/curriculum/new-section', 'SectionController@create')->name('course');
Route::get('/schoolAdmin/{school}/courses/{course}/curriculum/{section}/new-lecture', 'LessonController@create')->name('course');
Route::get('/schoolAdmin/{school}/courses/{course}/curriculum/{section}/lessons/{lesson}/edit', 'LessonController@edit')->name('course');

//course pricing
Route::get('/schoolAdmin/{school}/courses/{course}/pricing', 'CourseController@pricing')->name('course');

Route::get('/schoolAdmin/{school}/courses/{course}/pricing/createFreePlan', 'PricingController@createFreePlan')->name('course');
Route::get('/schoolAdmin/{school}/courses/{course}/pricing/{pricing}/editFreePlan', 'PricingController@editFreePlan')->name('course');

Route::get('/schoolAdmin/{school}/courses/{course}/pricing/createSubscriptionPlan', 'PricingController@createSubscriptionPlan')->name('course');
Route::get('/schoolAdmin/{school}/courses/{course}/pricing/{pricing}/editSubscriptionPlan', 'PricingController@editSubscriptionPlan')->name('course');

Route::get('/schoolAdmin/{school}/courses/{course}/pricing/createOnePurchasePlan', 'PricingController@createOnePurchasePlan')->name('course');
Route::get('/schoolAdmin/{school}/courses/{course}/pricing/{pricing}/editOnePurchasePlan', 'PricingController@editOnePurchasePlan')->name('course');

Route::get('/schoolAdmin/{school}/courses/{course}/pricing/createPaymentPlan', 'PricingController@createPaymentPlan')->name('course');
Route::get('/schoolAdmin/{school}/courses/{course}/pricing/{pricing}/editPaymentPlan', 'PricingController@editPaymentPlan')->name('course');

//course certificates
Route::get('/schoolAdmin/{school}/courses/{course}/certificates', 'CourseController@certificates')->name('course');
/*

Route::get('/schoolAdmin/{school}/courses', 'CourseController@coursesForAdmin');

Route::get('/schoolAdmin/{school}/courses/{course}/information', 'CourseController@showForAdmin');

Route::get('/schoolAdmin/{school}/courses/{course}/pages', 'CourseController@coursePages');

Route::get('/schoolAdmin/{school}/courses/{course}/curriculum', 'CourseController@courseCurriculum');

Route::get('/schoolAdmin/{school}/courses/{course}/pricing', 'CourseController@coursePricing');

Route::get('/schoolAdmin/{school}/courses/{course}/certificate', 'CourseController@courseCerficate');
*/
