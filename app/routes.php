<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);
Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

Route::post('/tasks', 'TasksController@store');

Route::patch('tasks/{id}', ['as' => 'tasks.update', 'uses' => 'TasksController@update']);

Route::get('test', function ()
{
    return View::make('test');
});
// resource routes for posts
Route::post('posts/imageupload', 'PostsController@imageUpload');

Route::resource('posts', 'PostsController');

Route::get('{username}/tasks','UserTasksController@index');

Route::get('{username}/tasks/{id}', ['as' => 'user.tasks.show', 'uses' => 'UserTasksController@show']);

//
//Route::get('{username}/tasks', function ($username)
//{
//    $user = User::whereUsername($username)->first();
//
//    return $user->tasks;
//
//});
//
//Route::get('{username}/tasks/{id}', function ($username, $id)
//{
//    $user = User::with('tasks')->whereUsername($username)->first();
//    $task = $user->tasks;
//
//    return View::make('tasks.show', compact('task'));
//
//});