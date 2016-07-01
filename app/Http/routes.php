<?php

Route::get('/', 'AppController@index');


// TODO:Delete These
Route::get('/alert', 'MainController@alert');
Route::get('/lists', 'MainController@lists');

//API Section
Route::get('api/tutorials/{id}', 'TutorialsController@getTutorial');
Route::get('api/tutorials', 'TutorialsController@getTutorials');
Route::get('api/subscriptions', 'SubscriptionsController@getSubscriptions');
Route::get('api/categories', 'CategoriesController@getCategories');
Route::get('api/users', 'UsersController@getUsers');
