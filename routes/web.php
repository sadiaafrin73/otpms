<?php

use Illuminate\Support\Facades\Route;

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
//backend
//dashboard
Route::group(['prefix'=>'home','middleware'=>'auth'],function(){
//home
    Route::get('/','backend\HomeController@index')->name('dashboard.admin');
    Route::get('/student','backend\StudentController@student')->name('dashboard.student');
    Route::get('/report','backend\ReportController@report')->name('dashboard.report');
    
    Route::get('/business_setup','backend\Business_setupController@business_setup')->name('dashboard.business_setup');
    Route::get('/tution','backend\TutionController@tution')->name('dashboard.tution');
    Route::get('/tutor/tutor_request','backend\TutorController@tutor_request')->name('dashboard.tutor.tutor_request');
    Route::get('/tutor/tutor_list','backend\TutorController@tutor_list')->name('dashboard.tutor.tutor_list');
    //student
    //Route::get('/student/list','backend\StudentController@list')->name('student.list');
    //subject
    Route::get('/subject/addsubject','backend\SubjectController@subject')->name('dashboard.subject.addsubject');
    Route::get('/subject/subjectlist','backend\SubjectController@subjectlist')->name('dashboard.subject.subjectlist');
    Route::post('/subject/addsubject','backend\SubjectController@addsubject')->name('subject.addsubject');
    Route::get('/subject/delete/{id}','backend\SubjectController@deletesubject')->name('subject.delete');
    Route::get('/subject/view/{id}','backend\SubjectController@viewsubject')->name('subject.view');
    Route::get('/subject/edit/{id}','backend\SubjectController@editsubject')->name('subject.edit');
    Route::put('/subject/update/{id}','backend\SubjectController@updatesubject')->name('subject.update');


});

//user
Route::get('/login','backend\UserController@login')->name('login');
Route::post('/login','backend\UserController@loginprocess')->name('login.do');
Route::get('/logout','backend\UserController@logout')->name('logout');
//frontend
Route::get('/homef','frontend\HomeController@index')->name('dashboard');
Route::get('/homef/tutor/login','frontend\TutorController@login')->name('tutor.login');
Route::post('/homef/tutor/login/submit','frontend\TutorController@login_submit')->name('tutor.submit');