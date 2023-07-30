<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountController;

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

Route::get('/', [CustomAuthController::class,'loginPage'])->middleware('guest');
// Route::get('/register', [CustomAuthController::class,'registerPage'])->middleware('AllreadyLogin');
// Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');
// Route::post('/login-user', [CustomAuthController::class,'loginUser'])->name('login-user');
// Route::get('/admin-dashboard', [CustomAuthController::class,'adminDashboard'])->middleware('isLogin');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::post('/create-user', '\App\Http\Controllers\Auth\RegisterController@create');

Route::get('/student-register', [StudentController::class,'studentRegistrationPage'])->middleware('isLogin');
Route::post('/create-class', [StudentController::class,'createClass'])->name('create-class');
Route::post('/student-registration', [StudentController::class,'newStudentPost'])->name('student-registration');
Route::get('/student-list', [StudentController::class,'FetchStudentList'])->middleware('isLogin');
Route::get('/student-profile-page', [StudentController::class,'StudentProfilePage'])->middleware('isLogin');


Route::get('/account-admin-page', [AccountController::class,'AccountPage'])->middleware('isLogin');
Route::get('/account-feetype-form', [AccountController::class,'AddFeeTypeForm'])->middleware('isLogin');
Route::get('/account-feetype', [AccountController::class,'FeeType'])->middleware('isLogin');
Route::post('/fee-structure-post', [AccountController::class,'AddFeeStructure'])->name('fee-structure-post');


Auth::routes();
Route::prefix('parent')->middleware(['auth'])->group(function (){

});

Route::prefix('student')->middleware(['auth'])->group(function (){

});

Route::prefix('admin')->middleware(['auth','is_admin'])->group(function (){
    // Route::get('/academic/dashboard', '\App\Http\Controllers\AcademicController@index');
    // Route::get('/academic/class', '\App\Http\Controllers\AcademicController@class');
    Route::prefix("academics")->group(function (){
        Route::get('/dashboard', '\App\Http\Controllers\AcademicController@index');

        Route::get('/class-section', '\App\Http\Controllers\ClassController@showall');
        Route::post('/class-create', '\App\Http\Controllers\ClassController@create')->name('new_class');
        Route::get('/class-create-page', '\App\Http\Controllers\ClassController@showCreatePage');
        Route::post('/class-update/{id}', '\App\Http\Controllers\ClassController@update')->name('update_class');
        Route::get('/class-delete/{id}', '\App\Http\Controllers\ClassController@destroy');
        Route::get('/show/{id}', '\App\Http\Controllers\ClassController@show');
        Route::get('/class-update-page/{id}', '\App\Http\Controllers\ClassController@showUpdatePage');
        Route::get('/class_subjects/{id}', '\App\Http\Controllers\ClassController@classSubjects');

        Route::get('/subject', '\App\Http\Controllers\SubjectController@index');
        Route::post('/subject-create', '\App\Http\Controllers\SubjectController@create')->name('new_subject');
        Route::get('/subject-create-page', '\App\Http\Controllers\SubjectController@showCreatePage');
        Route::post('/subject-update/{id}', '\App\Http\Controllers\SubjectController@update')->name('update_subject');
        Route::get('/subject-delete/{id}', '\App\Http\Controllers\SubjectController@destroy');
        Route::get('/subject-update-page/{id}', '\App\Http\Controllers\SubjectController@showUpdatePage');

        Route::get('/routine', '\App\Http\Controllers\RoutineController@index');
        Route::post('/routine-create', '\App\Http\Controllers\RoutineController@create')->name('new_routine');
        Route::get('/routine-create-page', '\App\Http\Controllers\RoutineController@showCreatePage');
        Route::post('/routine-update/{id}', '\App\Http\Controllers\RoutineController@update')->name('update_routine');
        Route::get('/routine-delete/{id}', '\App\Http\Controllers\RoutineController@destroy');
        Route::get('/routine-update-page/{id}', '\App\Http\Controllers\RoutineController@showUpdatePage');
        Route::get('/routine-view-page/{id}', '\App\Http\Controllers\RoutineController@show');

        Route::get('/studymaterials', '\App\Http\Controllers\StudymaterialController@index');
        Route::post('/studymaterials-create', '\App\Http\Controllers\StudymaterialController@create')->name('new_studymaterials');
        Route::get('/studymaterials-create-page', '\App\Http\Controllers\StudymaterialController@showCreatePage');
        Route::post('/studymaterials-update/{id}', '\App\Http\Controllers\StudymaterialController@update')->name('update_studymaterials');
        Route::get('/studymaterials-delete/{id}', '\App\Http\Controllers\StudymaterialController@destroy');
        Route::get('/studymaterials-delete-file/{id}', '\App\Http\Controllers\StudymaterialController@destroyfile');
        Route::get('/studymaterials-update-page/{id}', '\App\Http\Controllers\StudymaterialController@showUpdatePage');
        Route::get('/studymaterials-view-page/{id}', '\App\Http\Controllers\StudymaterialController@show');

        Route::get('/download/public/studymaterials/{file}', function($file){return response()->download(storage_path('app/public/studymaterials/'.$file));});

        Route::get('/homework', '\App\Http\Controllers\HomeworkController@index');
        Route::post('/homework-create', '\App\Http\Controllers\HomeworkController@create')->name('new_homework');
        Route::get('/homework-create-page', '\App\Http\Controllers\HomeworkController@showCreatePage');
        Route::post('/homework-update/{id}', '\App\Http\Controllers\HomeworkController@update')->name('update_homework');
        Route::get('/homework-delete/{id}', '\App\Http\Controllers\HomeworkController@destroy');
        Route::get('/homework-update-page/{id}', '\App\Http\Controllers\HomeworkController@showUpdatePage');
        Route::get('/homework-view-page/{id}', '\App\Http\Controllers\HomeworkController@show');

        Route::get('/download/public/homework/{file}', function($file){return response()->download(storage_path('app/public/homework/'.$file));});

        Route::get('/noticeboard', '\App\Http\Controllers\NoticeboardController@index');
        Route::post('/noticeboard-create', '\App\Http\Controllers\NoticeboardController@create')->name('new_noticeboard');
        Route::get('/noticeboard-create-page', '\App\Http\Controllers\NoticeboardController@showCreatePage');
        Route::post('/noticeboard-update/{id}', '\App\Http\Controllers\NoticeboardController@update')->name('update_noticeboard');
        Route::get('/noticeboard-delete/{id}', '\App\Http\Controllers\NoticeboardController@destroy');
        Route::get('/noticeboard-delete-file/{id}', '\App\Http\Controllers\StudymaterialController@destroyfile');
        Route::get('/noticeboard-update-page/{id}', '\App\Http\Controllers\NoticeboardController@showUpdatePage');
        Route::get('/noticeboard-view-page/{id}', '\App\Http\Controllers\NoticeboardController@show');

        Route::get('/download/public/noticeboards/{file}', function($file){return response()->download(storage_path('app/public/noticeboards/'.$file));});

    });

    Route::prefix("administrator")->group(function (){
        Route::get('/dashboard', '\App\Http\Controllers\AdministratorController@index');

        Route::get('/staff', '\App\Http\Controllers\TeacherController@index');
        Route::post('/staff-create', '\App\Http\Controllers\TeacherController@create')->name('new_Staff');
        Route::get('/staff-create-page', '\App\Http\Controllers\TeacherController@showCreatePage');
        Route::post('/staff-update/{id}', '\App\Http\Controllers\TeacherController@update')->name('update_staff');
        Route::get('/staff-delete/{id}', '\App\Http\Controllers\TeacherController@destroy');
        Route::get('/staff-update-page/{id}', '\App\Http\Controllers\TeacherController@showUpdatePage');

        Route::post('/parent-create', '\App\Http\Controllers\ParentController@create')->name('new_parent');
        Route::get('/parent-create-page', '\App\Http\Controllers\ParentController@showParentPage');
        Route::get('/parents', '\App\Http\Controllers\ParentController@index');

        Route::post('/student-create', '\App\Http\Controllers\StudentController@create')->name('new_student');
        Route::get('/student-register', '\App\Http\Controllers\StudentController@register_student');
        Route::get('/students', '\App\Http\Controllers\StudentController@index');
    });

    Route::prefix("parent")->group(function (){
        Route::post('/create', '\App\Http\Controllers\ParentController@create')->name('new_parent');
        Route::get('/create-page', '\App\Http\Controllers\ParentController@showParentPage');
        Route::post('/show_all', '\App\Http\Controllers\ParentController@showall');
    });

    Route::prefix("student")->group(function (){
        Route::post('/create', '\App\Http\Controllers\StudentController@create')->name('new_student');
        Route::get('/register', '\App\Http\Controllers\StudentController@register_student');
        Route::post('/show_all', '\App\Http\Controllers\StudentController@showall');
    });

    Route::prefix("user")->group(function (){
        Route::post('/create', '\App\Http\Controllers\UserController@create')->name('new_user');
        Route::post('/create-page', '\App\Http\Controllers\UserController@showUserPage');
        Route::post('/show_all', '\App\Http\Controllers\UserController@showall');
    });
});


Route::get('/home', '\App\Http\Controllers\HomeController@index')->name('home');
