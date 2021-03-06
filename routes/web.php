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

// Built-in subdomains
Route::group(
    [
        'domain' => '{subdomain}.' . config('app.domain'),
    ],
    function(){
        Route::get('/', 'SchoolController@showBusinessHome')->name('website.subdomain.home');
        //Route::get('/', 'FrontendController@show')->name('website.subdomain');
        Route::get('/schoolAdmin/{school}', 'SchoolController@showForBusiness')->name('website.subdomain');
        Route::get('/schools/{school}/preview-out', 'SchoolController@showBusinessOut')->name('website.subdomain.previewOut');
        Route::get('/schools/{school}/preview-in', 'SchoolController@showBusinessIn')->name('website.subdomain.previewIn');

        Route::get('/login', 'SchoolController@showBusinessLogin')->name('website.subdomain.login');
        Route::get('/register', 'SchoolController@showBusinessRegister')->name('website.subdomain.register');
        Route::get('/home', 'SchoolController@showBusinessHomeUsers')->name('website.subdomain.home_users');

        Route::get('/users/billings_business', 'UserController@BillingsBusiness')->name('website.subdomain.users_billings');

        Route::get('/users/contact_business', 'UserController@showFormContactSubDomain')->name('website.subdomain.contact_business');

        Route::get('/users/settings_business', 'UserController@settingsContactSubDomain')->name('website.subdomain.settings_business');

        Route::get('/users/notifications_business', 'UserController@informationsSubDomain')->name('website.subdomain.notifications_business');

        Route::post('/submit_contact_business', 'SchoolController@contactSubDomain')->name('website.subdomain.submit_contact_business');


        //Route::get('/course/{slug}','CourseController@showCourseOut')->name('website.subdomain.course_out');
    }
);

// Attached domains
Route::group(
    [
        'domain' => '{domain}',
    ],
    function(){
        //Route::get('/', 'FrontendController@show')->name('website.domain');
    }
);


Route::get('/', function () {
    return view('homePage');
})->name('homePage');


Route::get('/wecash', function () {
    return view('pricings.wecash');
});

Route::get('/notif', function () {
    return view('users.notifications');
});

Route::get('/corporate', 'OfferController@corporate')->name('corporate');


Route::get('/email', function () {
    return view('email');
});

Auth::routes();

//custom auth
Route::post('/register/user', 'CustomAuthController@addUser');
Route::post('/login/user', 'CustomAuthController@loginUser');
Route::post('/customRegister', 'CustomAuthController@register');
Route::post('/customRegisterBusiness', 'CustomAuthController@registerBusiness');
Route::post('/customLogin', 'CustomAuthController@authenticate');
Route::post('/customLoginBusiness', 'CustomAuthController@authenticateBusiness');

Route::get('/users/billings', 'UserController@billings')->name('users.billings');

Route::get('/users/sessions', 'UserController@sessions')->name('users.sessions');

Route::get('/users/notifications', 'UserController@informations')->name('users.notifications');

Route::get('/schools/{school}/courses', 'schoolController@showCourses');


Route::get('/users/settings', 'UserController@edit')->name('users.settings');



Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::resource('schools', 'SchoolController');

Route::resource('users', 'UserController');

Route::resource('courses', 'CourseController');

Route::resource('categories', 'CategoryController');

Route::resource('pricings', 'PricingController');

Route::resource('sections', 'SectionController');

Route::resource('lessons', 'LessonController');

Route::resource('medias', 'MediaController');

Route::resource('quizzes', 'QuizController');

Route::resource('questions', 'QuestionController');

Route::resource('projects', 'ProjectController');

Route::resource('resources', 'ResourceController');

Route::resource('tasks', 'TaskController');

Route::resource('authors', 'AuthorController');

Route::resource('deliverables', 'DeliverableController');

Route::resource('coupons', 'CouponController');

Route::resource('informations', 'InformationController');

Route::resource('classrooms', 'ClassroomController');

Route::resource('faqs', 'FaqController');

Route::resource('drips', 'DripController');

Route::resource('colors', 'ColorController');

Route::resource('payments', 'PaymentsController');

Route::resource('offers', 'OfferController');

Route::resource('characteristics', 'CharacteristicController');

Route::resource('communities', 'CommunityController');


//for create school with subdoamin or attached domains
Route::post('/storeSchoolBusiness', 'SchoolController@storeSchoolBusiness')->name('schools.storeBusiness');

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

/*CSV Route */
/*
Route::get('csv_file', 'CvsFileController@index');

Route::get('csv_file/export', 'CsvFileController@csv_export')->name('export');

Route::post('csv_file/import', 'CsvFileController@csv_import')->name('import');
/*Route::get('/schoolAdmin/{school}/authors', 'UserController@authors')->name('userSettings');*/
Route::get('/schoolAdmin/{school}/users/export', 'CsvFileController@csv_export')->name('export');




//Ajax Routes

Route::post('/updateSchoolStatus', 'SchoolController@updateSchoolStatus');
Route::post('/updateCourseState', 'CourseController@updateCourseState');
Route::post('/updateCourseDescription', 'CourseController@updateCourseDescription');
Route::post('/deleteSchool', 'SchoolController@deleteSchool');
Route::post('/updateSchool', 'SchoolController@updateSchool');
Route::post('/addAuthor', 'SchoolController@addAuthor');
Route::post('/addLecture', 'LessonController@store');
Route::post('/updateLecture', 'LessonController@update');
Route::post('/updateLectureTitle', 'LessonController@updateTitle');
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
Route::post('/updateProjectTitle', 'ProjectController@updateTitle');
Route::post('/addTask', 'ProjectController@addTask');
Route::post('/editTask', 'ProjectController@editTask');
Route::post('/applyCoupon', 'CouponController@applyCoupon');
Route::post('/applyPassword', 'CouponController@applyPassword');

Route::post('/deleteAnswers/{quiz}', 'QuizController@deleteAnswers');



//school all courses
Route::get('/schools/{school}/courses', 'SchoolController@showCourses');

//school all moocs
Route::get('/schools/{school}/courses/filter/mooc', 'SchoolController@showMooc');

//school all moocs
Route::get('/schools/{school}/courses/filter/path', 'SchoolController@showPath');

//school all moocs
Route::get('/schools/{school}/courses/filter/bootcamp', 'SchoolController@showBootcamp');

/*
Route::get('/search', ['as' => 'search', 'uses' => 'SchoolController@search']);
*/

//routes for school admin dashboard

//school admin dashboard
Route::get('/schoolAdmin/{school}', 'SchoolController@showForAdmin')->name('admin');

//school settings
Route::get('/schoolAdmin/{school}/settings/general', 'SchoolController@edit')->name('schoolSettings');

//school payments
Route::get('/schoolAdmin/{school}/settings/payments', 'SchoolController@schoolPayments')->name('schoolSettings');

//school payments
Route::get('/schoolAdmin/{school}/payments', 'SchoolController@schoolmonthlyPayments')->name('admin');

//school students
Route::get('/schoolAdmin/{school}/users', 'SchoolController@schoolStudents')->name('userSettings');

//show user profile
Route::get('/users/show/{user}/{school}', 'UserController@show')->name('userSettings');

//school owners
Route::get('/schoolAdmin/{school}/users/owners', 'SchoolController@schoolOwners');

//school teachers
Route::get('/schoolAdmin/{school}/users/teachers', 'SchoolController@schoolTeachers');

//school transactions from students
Route::get('/schoolAdmin/{school}/sales/transactions', 'SchoolController@schoolTransactions');

//school statements from oschool
Route::get('/schoolAdmin/{school}/sales/statements', 'SchoolController@schoolStatements');


//routes for events tab
//school events
Route::get('/schoolAdmin/{school}/classrooms', 'ClassroomController@index')->name('schoolSettings');

Route::get('/schoolAdmin/{school}/classrooms/create', 'ClassroomController@create')->name('schoolSettings');

Route::get('/schoolAdmin/{school}/classrooms/{classroom}/edit', 'ClassroomController@edit')->name('schoolSettings');

Route::get('/classrooms/{classroom}/subscribeToClassroom', 'ClassroomController@subscribeToClassroom');

//school communities
Route::get('/schoolAdmin/{school}/communities', 'CommunityController@index');
Route::get('/schoolAdmin/{school}/communities/create', 'CommunityController@create');
Route::get('/schoolAdmin/{school}/communities/{community}/edit', 'CommunityController@edit');

//routes for school categorie tab
//school ctaegorie
Route::get('/schoolAdmin/{school}/categorie', 'CategoryController@indexSchoolCategorie')->name('school_category.index');
Route::get('/schoolAdmin/{school}/school_categorie/create', 'CategoryController@createSchoolCategorie');
Route::post('/schoolAdmin/{school}/school_categorie/create', 'CategoryController@store')->name('school_category.store');
Route::get('/schoolAdmin/{school}/school_categorie/{category}/edit','CategoryController@editSchoolCategorie');
Route::get('/schoolAdmin/{school}/school_categorie/{category}/update','CategoryController@editSchoolCategorie');
Route::patch('/schoolAdmin/{school}/school_categorie/{category}/update','CategoryController@updateSchoolCategorie')->name('school_category.update');
Route::get('/school/{school}/categories/{category}','CategoryController@indexBy');


//routes for faq tab
//school faq

Route::get('/schoolAdmin/{school}/faqs', 'FaqController@index')->name('schoolSettings');

Route::get('/schoolAdmin/{school}/faqs/create', 'FaqController@create')->name('schoolSettings');

Route::get('/schoolAdmin/{school}/faqs/{faq}/edit', 'FaqController@edit')->name('schoolSettings');

//route for payment
//School Mobile money payments
Route::get('/schoolAdmin/{school}/moyens_paiments', 'PaymentsController@payments')->name('schoolSettings');
Route::get('/schoolAdmin/{school}/moyens_paiments/mobile_money', 'PaymentsController@index')->name('schoolSettings');
Route::get('/schoolAdmin/{school}/moyens_paiments/mobile_money/create', 'PaymentsController@create')->name('schoolSettings');
Route::get('/schoolAdmin/{school}/moyens_paiments/mobile_money/{payment}/edit', 'PaymentsController@edit')->name('schoolSettings');
Route::patch('/schoolAdmin/{school}/moyens_paiments/mobile_money/{payment}/update','PaymentsController@update')->name('payments.update');

//routes for users tab
//school users
Route::get('/schoolAdmin/{school}/users', 'UserController@index')->name('userSettings');

//school owners
Route::get('/schoolAdmin/{school}/owners', 'UserController@owners')->name('userSettings');

//school students
Route::get('/schoolAdmin/{school}/students', 'UserController@students')->name('userSettings');

//school authors
Route::get('/schoolAdmin/{school}/authors', 'UserController@authors')->name('userSettings');

//routes for course admin dashboard

//course creation
Route::get('/schoolAdmin/{school}/courses/create', 'CourseController@createAdmin')->name('course');

//courses admin index
Route::get('/schoolAdmin/{school}/courses', 'CourseController@indexForAdmin')->name('course');

//course information
Route::get('/schoolAdmin/{school}/courses/{course}/information', 'CourseController@information')->name('course');

//course pages
Route::get('/schoolAdmin/{school}/courses/{course}/pages', 'CourseController@pages')->name('course');
//course deliverable
Route::get('/schoolAdmin/{school}/courses/{course}/deliverables', 'DeliverableController@index')->name('deliverable');

//edit deliverable
Route::get('/schoolAdmin/{school}/course/{course}/project/{project}/deliverables/{deliverable}/edit', 'DeliverableController@edit')->name('deliverable');

//course students
Route::get('/schoolAdmin/{school}/courses/{course}/students', 'CourseController@students')->name('userSettings');

//course Notification
Route::get('/schoolAdmin/{school}/informations', 'InformationController@index')->name('schoolSettings');
Route::get('/schoolAdmin/{school}/informations/create', 'InformationController@create')->name('schoolSettings');
Route::get('/schoolAdmin/{school}/informations/{information}/edit', 'InformationController@edit')->name('schoolSettings');


//course curriculum
Route::get('/schoolAdmin/{school}/courses/{course}/curriculum', 'CourseController@curriculum')->name('course');
Route::get('/schoolAdmin/{school}/courses/{course}/curriculum/new-section', 'SectionController@create')->name('course');
Route::get('/schoolAdmin/{school}/courses/{course}/curriculum/{section}/new-lecture', 'LessonController@create')->name('course');
Route::get('/schoolAdmin/{school}/courses/{course}/curriculum/{section}/lessons/{lesson}/edit', 'LessonController@edit')->name('course');
Route::get('/schoolAdmin/{school}/courses/{course}/curriculum/{section}/lessons/{lesson}/quiz/{quiz}/edit', 'QuizController@edit')->name('course');
Route::get('/schoolAdmin/{school}/courses/{course}/curriculum/sections/{section}/edit', 'SectionController@edit')->name('course');


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

//course drip
Route::get('/schoolAdmin/{school}/courses/{course}/drips', 'DripController@index')->name('course');

//course certificates
Route::get('/schoolAdmin/{school}/courses/{course}/certificate', 'CourseController@certificateAdmin')->name('course');

//delete user from the course
Route::post('/unsubscribe', 'CourseController@unsubscribe');

//ajouter manuellement un achat
Route::get('/schoolAdmin/{school}/courses/{course}/students/{user}/subscribe', 'PurchaseController@add');
Route::get('/showBusinessPurchaseForm', 'PurchaseController@showBusinessPurchaseForm');
Route::post('/addBusinessPurchase', 'PurchaseController@addBusinessPurchase');
/*

Route::get('/schoolAdmin/{school}/courses', 'CourseController@coursesForAdmin');

Route::get('/schoolAdmin/{school}/courses/{course}/information', 'CourseController@showForAdmin');

Route::get('/schoolAdmin/{school}/courses/{course}/pages', 'CourseController@coursePages');

Route::get('/schoolAdmin/{school}/courses/{course}/curriculum', 'CourseController@courseCurriculum');

Route::get('/schoolAdmin/{school}/courses/{course}/pricing', 'CourseController@coursePricing');

Route::get('/schoolAdmin/{school}/courses/{course}/certificate', 'CourseController@courseCerficate');
*/

Route::post('/addResult', 'CourseController@addResult');



//vue pour le front end
Route::get('/course/{slug}', 'CourseController@showSlug')->name('course.slug');
Route::get('/path/{slug}', 'CourseController@showSlug')->name('path.slug');
Route::get('/course/enrolled/{slug}', 'CourseController@showCurriculum')->name('enrolled.slug');
Route::get('/path/enrolled/{slug}', 'CourseController@showCurriculum')->name('enrolled.slug');
Route::get('/course/{slugCourse}/lessons/{slug}', 'LessonController@showSlug')->name('lesson.slug');
Route::get('/course/{slugCourse}/checkout/{pricing}', 'PurchaseController@checkout');
Route::get('/path/{slugCourse}/projects/{slug}', 'ProjectController@showProject');

Route::get('/checkoutPartners/{offer}', 'OfferController@checkoutPartners');

//restart quiz
Route::get('/restartQuiz/{quiz}/{result}/{user}', 'QuizController@restartQuiz');


//pour les achats
Route::post('/notify', 'PurchaseController@notify')->name('notify');
Route::post('renew', 'PurchaseController@renew');
Route::post('/thank-you', 'PurchaseController@thankYou');
Route::get('/thank-you', 'PurchaseController@thankYou');

Route::get('/schoolAdmin/{school}/integrations', 'SchoolController@integrations');

//api zoom
Route::get('/callback', 'SchoolController@callback');
Route::get('/listMeetings/{lesson}/{user}', 'SchoolController@listMeetings')->name('course');
Route::post('/associateMeeting', 'SchoolController@associateMeeting')->name('course');
Route::post('/dissociateMeeting', 'SchoolController@dissociateMeeting')->name('course');
Route::post('/addConference', 'LessonController@addConference')->name('course');
Route::get('/deleteConference/{lesson}', 'LessonController@deleteConference')->name('course');

//api vimeo
Route::get('/vimeocallback', 'SchoolController@vimeoCallback');
Route::get('/uploadvideocallback', 'SchoolController@uploadVideoCallback');
Route::post('/postVideoToVimeo', 'SchoolController@postVideoToVimeo');


//make user subscribe for free
Route::post('/subscribeForFree', 'PurchaseController@subscribeForFree');

//make user admin of a school
Route::post('/nameSchoolAdmin', 'SchoolController@nameSchoolAdmin');
Route::post('/revokeSchoolAdmin', 'SchoolController@revokeSchoolAdmin');

//validate a lesson
Route::post('/completeLesson', 'LessonController@completeLesson');


//routes for dashboard admin
Route::get('/user/admin', 'AdminController@admin');
Route::get('/user/admin/schools', 'AdminController@schoolIndex');
Route::get('/user/admin/courses', 'AdminController@courseIndex');
Route::get('/user/admin/users', 'AdminController@userIndex');
Route::get('/user/admin/payments', 'AdminController@paymentIndex');

Route::post('/users/deleteRole', 'UserController@deleteRole');

Route::post('/monthlyPayments', 'AdminController@monthlyPayments');




// for authors

Route::get('/schoolAdmin/{school}/authors/{author}/edit', 'AuthorController@edit');
Route::get('/authors/{author}/show', 'AuthorController@show');

//Route::get('/schoolAdmin/{school}/authors', 'AuthorController@index');

Route::get('/schoolAdmin/{school}/authors/create', 'AuthorController@create');
Route::post('/updateAuthor/{author}', 'AuthorController@update');

//For coupons
Route::get('/schoolAdmin/{school}/courses/{course}/coupons', 'CouponController@index')->name('coupon');
Route::get('/schoolAdmin/{school}/courses/{course}/coupons/create', 'CouponController@create')->name('coupon');
Route::get('/schoolAdmin/{school}/courses/{course}/coupons/{coupon}/edit', 'CouponController@edit')->name('coupon');
Route::post('/updateCoupon/{coupon}', 'CouponController@update')->name('coupon.update');

//fot deliverable

Route::post('/addComment/{deliverable}', 'DeliverableController@update');
Route::post('/resubmitDeliverable', 'DeliverableController@resubmitDeliverable');

//routes for certificate
Route::get('/certificate/{course}', 'CourseController@certificate')->name('certificate');

Route::get('/getCertificate/{course}', 'CourseController@getCertificate');


//routes for ajax search

Route::get('/ajax_course_search/{school}', 'LiveSearchController@action');
Route::get('/ajax_user_search_admin', 'LiveSearchController@searchUsersAdmin');
Route::get('/ajax_course_search_admin', 'LiveSearchController@searchCoursesAdmin');
Route::get('/ajax_school_search_admin', 'LiveSearchController@searchSchoolsAdmin');
Route::get('/ajax_categorie_search_admin', 'LiveSearchController@searchCategoriesAdmin');
Route::get('/ajax_offer_search_admin', 'LiveSearchController@searchOffersAdmin');
Route::get('/ajax_characteristic_search_admin', 'LiveSearchController@searchCharacteristicAdmin');


//

Auth::routes(['verify' => true]);

//login by social network

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/gmail', 'Auth\LoginController@redirectToProviderGmail');
Route::get('login/gmail/callback', 'Auth\LoginController@handleProviderCallbackGmail');

Route::get('login/linkedin', 'Auth\LoginController@redirectToProviderLinkedin');
Route::get('login/linkedin/callback', 'Auth\LoginController@handleProviderCallbackLinkedin');

Route::get('login/github', 'Auth\LoginController@redirectToProviderGithub');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallbackGithub');


//user change password


Route::get('user/settings/changePassword', 'UserController@changePassword');
Route::post('user/settings/editPassword', 'UserController@editPassword');
