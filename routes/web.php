<?php
use App\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/cards','cadsController@index');
*/
Route::get('/viewall','PagesController@get_task');
Route::get('/add','PagesController@View_task');
Route::post('/add','PagesController@Make_task');


Route::get('/delete/{id}',function ($id){
    $tasks=Task::find($id);
    $tasks->delete();
    return redirect('/viewall');
});

Route::get('/edit/{id}','PagesController@Edit_task');
Route::post('/edit/{id}','PagesController@Edit_task');

//Route::post('/delete','PagesController@delete_task');