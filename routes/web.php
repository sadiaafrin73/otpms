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
Route::group(['prefix'=>'home','middleware'=>['auth','checkAdmin']],function(){
//home
    Route::get('/','backend\HomeController@index')->name('dashboard.admin');
    Route::get('/student','backend\StudentController@student')->name('dashboard.student');
    Route::get('/student','frontend\StudentController@studentlist')->name('dashboard.student');
    Route::get('/report','backend\ReportController@report')->name('dashboard.report');
    
    Route::get('/business_setup','backend\Business_setupController@business_setup')->name('dashboard.business_setup');
    //Tution post request
    Route::get('/tution_post_request','backend\TutionController@tution_post_request')->name('dashboard.tution_post_request');
    Route::get('/tution_post_request/approved/{id}','backend\TutionController@tution_approved')->name('tution_post_request.approved');
    
    Route::get('/tutor/tutor_request','backend\TutorController@tutor_request')->name('dashboard.tutor.tutor_request');
    //Route::get('/tutor/tutor_request','frontend\TutorController@tutor_requestshow')->name('dashboard.tutor.tutor_request');
    

    Route::get('/tutor/tutor_list','backend\TutorController@tutor_list')->name('dashboard.tutor.tutor_list');
    //student
    //Route::get('/student/list','backend\StudentController@list')->name('student.list');

    //subject
    Route::get('/subject/addsubject','backend\SubjectController@subject')->name('dashboard.subject.addsubject');
    Route::post('/subject/addsubject','backend\SubjectController@addsubject')->name('subject.addsubject');
    Route::get('/subject/subjectlist','backend\SubjectController@subjectlist')->name('dashboard.subject.subjectlist');

    //group
    Route::get('/group','backend\GroupController@group')->name('dashboard.group');
    Route::post('/group/submit','backend\GroupController@groupsubmit')->name('dashboard.group.submit');

    //class
    Route::get('/class','backend\ClassController@class')->name('dashboard.class');
    Route::post('/class/submit','backend\ClassController@classsubmit')->name('dashboard.class.submit');
  

    Route::get('/subject/delete/{id}','backend\SubjectController@deletesubject')->name('subject.delete');
    Route::get('/subject/view/{id}','backend\SubjectController@viewsubject')->name('subject.view');
    Route::get('/subject/edit/{id}','backend\SubjectController@editsubject')->name('subject.edit');
    Route::put('/subject/update/{id}','backend\SubjectController@updatesubject')->name('subject.update');
//

});

//user
Route::get('/login','backend\UserController@login')->name('login');
Route::post('/login','backend\UserController@loginprocess')->name('login.do');
Route::get('/logout','backend\UserController@logout')->name('logout');
//frontend
Route::get('/homef','frontend\HomeController@homeindex')->name('dashboard');
//registration
Route::post('/homef/student/registration','frontend\StudentController@registration')->name('student.registration');
Route::post('/homef/tutor/registration','frontend\TutorController@registration')->name('tutor.registration');
//login,logout
Route::get('/homef/tutor/login','frontend\TutorController@tutorlogin')->name('tutor.login');
Route::post('/homef/tutor/login/submit','frontend\TutorController@login_submit')->name('tutor.submit');
Route::get('homef/tutor/logout','frontend\TutorController@tutorlogout')->name('tutor.logout');
Route::get('/homef/student/login','frontend\StudentController@login')->name('student.login');
Route::post('/homef/student/login/submit','frontend\StudentController@login_submit')->name('student.submit');
//tution post
Route::get('/homef/tution_post','frontend\TutionController@tution_post')->name('tution.post');
Route::post('/homef/tution_post/submit','frontend\TutionController@tution_post_submit')->name('tution.post.submit');
Route::get('/homef/tution_post/details/{id}','frontend\TutionController@tutionpost_details')->name('tution.post.details');
//Route::get('/homef/tution_post/add','frontend\TutionController@addtution')->name('tution.add');
//tution list
Route::get('/homef/tutionlist','frontend\TutionController@showtutionlist')->name('tution.list');
