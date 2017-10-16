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



/*
Route::get('/', function () {
    return view('welcome');
});
*/

/******************************************/


/*Route::get('/index', function () {
    return view('index');
});
Route::get('MyProject', 'ProjectController@index');*/


/*Route::get('/', function($id) {
    //
    return view('welcome');
});
*/



Route::resource('project', 'ProjectController');// Proejct
Route::resource('task', 'TaskController'); // task
Route::resource('Risk','RiskController');

//add Task To ptoject
Route::get('project/{projectId}/tasks/','ProjectController@project_AddTasks');
Route::get('project/{projectId}/Risks/','ProjectController@project_AddRisk');
Route::get('/email','HomeController@email')->name('sendEmail');
//Route::get('taskRemove/{taskId}/','TaskController@destroy');

//other
Route::get('/timeline','ProjectController@timeline');
//Route::get('project/{post}/tasks/{comment}','ProjectController@projectTasks');



/*****************************************/




/*
Route::get('/MyProject', function () {
    return view('MyProject');
});
*/


/*
Route::get('/timeline', function () {
    return view('timeline');
});

Route::get('/', function () {
    return view('timeline');
});
*/


Route::get('/newKanban', function () {
    return view('newKanban');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function(){
  return view('index');
});

Route::get('/pdf','PdfController@pdf_Projects');
Route::get('/pdftasks/{id}','PdfController@pdf_ProjectTask');
Route::get('/exportProject', 'ProjectController@Project_export_load');
Route::get('/Gantt/{id}', 'ProjectController@Gantt');


Route::get('/web','ProjectController@web');
Route::get('/projectbyCode/{id}','ProjectController@projectfinded');
Route::get('/projectRiskbyCode/{id}','ProjectController@projectRiskfinded');
Route::get('/Duplicateproject', 'ProjectController@duplicate_load' );
Route::get('/Duplicateproject/{id}','ProjectController@Duplicate');
