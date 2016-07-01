<?php

Route::get('/', 'AppController@index');


// TODO:Delete These
Route::get('/alert', 'MainController@alert');
Route::get('/lists', 'MainController@lists');

//API Section
Route::get('api/tutorials/{id}', 'TutorialsController@getTutorial');
Route::get('api/tutorials', 'TutorialsController@getTutorials');
