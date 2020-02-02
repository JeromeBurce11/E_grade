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

Route::get('/welcome', function () {
    return view('welcome');
});
// Route::get('registration/{$id}','UserController@register');
// Route::get('login','UserController@login');
// Route::get('admin/test/{id?}',function(){
//     return 'test';
// })->name('test');
Route::get('/admin/Dashboard','StudentController@showannouncements')->name('admin/Dashboard');
// Route::get('/admin/showlistOfStudent/{id?}','UserController@welcome')->name('welcome');
Route::get('/admin/course/{id}','StudentController@create')->name('addStudent');
Route::any('/admin/create','StudentController@insert')->name('admin/create');

Route::get('/admin/viewStudent/{id?}','UserController@showStudent')->name('showStudent');
Route::get('admin/showlistOfStudent/{id}','StudentController@showListOfStudent')->name('showStudentsInCourse');

Route::get('/admin/addCourseForm','StudentController@addCourses')->name('admin/addCourse');
Route::post('/admin/addCourses','StudentController@insertCourse')->name('admin/addCourses');
Route::get('/admin/showCourses','StudentController@showCourses')->name('admin/showCourses');

Route::get('/admin/addAnnouncementForm','StudentController@addAnnouncementForm')->name('admin/addAnnouncementForm');
Route::post('/admin/addAnnouncement','StudentController@addAnnouncement')->name('admin/addAnnouncement');

Route::get('/admin/edit/{id}','StudentController@edit')->name('admin/edit');
Route::post('/admin/update/{id}','StudentController@update')->name('admin/update');
Route::get('delete/{id}','StudentController@delete');

Route::post('/admin/insertGrade','StudentController@insertGrades')->name('admin/showGrades');
Route::get('/admin/showGrades','StudentController@showGrades')->name('admin/showGrades');


Auth::routes();


Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/user', 'Auth\LoginController@showUserLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/user', 'Auth\RegisterController@showUserRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/user', 'Auth\LoginController@userLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/user', 'Auth\RegisterController@createUser');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/user', 'user');

Route::get('/home', 'HomeController@index')->name('home');
