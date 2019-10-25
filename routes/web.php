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

Route::post('/register/user', 'CustomAuthController@addUser');
Route::post('/login/user', 'CustomAuthController@loginUser');

Route::get('/users/billings', 'UserController@billings');



Route::get('/users/settings', 'UserController@edit');




Route::get('/home', 'HomeController@index')->name('home');

Route::resource('schools', 'SchoolController');

Route::resource('users', 'UserController');

Route::resource('courses', 'CourseController');

Route::resource('categories', 'CategoryController');

Route::resource('pricings', 'PricingController');

Route::resource('sections', 'SectionController');

Route::resource('lessons', 'LessonController');

Route::resource('quizzes', 'QuizController');

Route::resource('questions', 'QuestionController');
Route::resource('coupons', 'CouponController');

Route::resource('projects', 'ProjectController');

Route::resource('resources', 'ResourceController');

Route::resource('tasks', 'TaskController');


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
Route::post('/updateCourseState', 'CourseController@updateCourseState');
Route::post('/updateCourseDescription', 'CourseController@updateCourseDescription');
Route::post('/deleteSchool', 'SchoolController@deleteSchool');
Route::post('/updateSchool', 'SchoolController@updateSchool');
Route::post('/addAuthor', 'SchoolController@addAuthor');
Route::post('/addLecture', 'LessonController@store');
Route::post('/updateLecture', 'LessonController@update');
Route::post('/saveNewPositions', 'LessonController@saveNewPositions');
Route::post('/saveNewSectionPositions', 'LessonController@saveNewSectionPositions');
Route::post('/saveNewQuestionPositions', 'LessonController@saveNewQuestionPositions');
Route::post('/saveNewTaskPositions', 'ProjectController@saveNewTaskPositions');
Route::post('/saveNewResourcePositions', 'ProjectController@saveNewResourcePositions');
Route::post('/saveNewProjectPositions', 'ProjectController@saveNewProjectPositions');

Route::post('/deleteLecture', 'LessonController@destroy');
Route::post('/addQuiz', 'LessonController@addQuiz');
Route::post('/editQuiz', 'LessonController@editQuiz');
Route::post('/deleteOption', 'LessonController@deleteOption');
Route::post('/check', 'QuizController@check');
Route::post('/updateProject', 'ProjectController@update');
Route::post('/addTask', 'ProjectController@addTask');
Route::post('/editTask', 'ProjectController@editTask');



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
Route::get('/schoolAdmin/{school}/courses/{course}/curriculum/{section}/lessons/{lesson}/quiz/{quiz}/edit', 'QuizController@edit')->name('course');


//path curriculum
Route::get('/schoolAdmin/{school}/paths/{course}/curriculum', 'CourseController@curriculum')->name('course');
Route::get('/schoolAdmin/{school}/paths/{course}/curriculum/new-project', 'ProjectController@create')->name('course');
Route::get('/schoolAdmin/{school}/paths/{course}/curriculum/projects/{project}/new-resource', 'ResourceController@create')->name('course');
Route::get('/schoolAdmin/{school}/paths/{course}/curriculum/projects/{project}/edit', 'ProjectController@edit')->name('course');
Route::get('/schoolAdmin/{school}/paths/{course}/curriculum/projects/{project}/resources/{resource}/edit', 'ResourceController@edit')->name('course');

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


//vue pour le front end
Route::get('/course/{slug}', 'CourseController@showSlug')->name('course.slug');
Route::get('/path/{slug}', 'CourseController@showSlug')->name('path.slug');
Route::get('/course/enrolled/{slug}', 'CourseController@showCurriculum')->name('enrolled.slug');
Route::get('/course/{slugCourse}/lessons/{slug}', 'LessonController@showSlug')->name('lesson.slug');
Route::get('/course/{slugCourse}/checkout/{pricing}', 'PurchaseController@checkout');


//pour les achats
Route::post('/notify', 'PurchaseController@notify')->name('notify');
Route::post('renew', 'PurchaseController@renew');
Route::post('/thank-you', function () {
    return view('thank-you');
});
Route::get('/thank-you', function () {
    return view('thank-you');
});


//validate a lesson
Route::post('/completeLesson', 'LessonController@completeLesson');


//routes for dashboard admin
Route::get('/user/admin', 'AdminController@admin');
Route::get('/user/admin/schools', 'AdminController@schoolIndex');
Route::get('/user/admin/courses', 'AdminController@courseIndex');
Route::get('/user/admin/users', 'AdminController@userIndex');
Route::get('/user/admin/payments', 'AdminController@paymentIndex');

Route::post('/monthlyPayments', 'AdminController@monthlyPayments');


//routes for certificate
