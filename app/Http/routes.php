<?php

use App\User;

Route::get('user/create', function()
{
    User::create([
        'status'    => '1',
        'role_id'   => 1,
        'name'      => 'Tomáš',
        'surname'   => 'Bartalský',
        'titleURL'  => 'bartalsky',
        'email'     => 'tomas@bartalsky.com',
        'password'  => 'general'
    ]);
});

// Display all SQL executed in Eloquent
/*
Event::listen('illuminate.query', function($query)
{
    var_dump($query);
});
*/

/*

Route::get('/', ['middleware' => 'admin', function()
{
    return 'this page may only be visible for admin and moderator...';
}]);
*/

Route::get('admin/auth/login', 'Admin\AdminSessionsController@create');
Route::get('admin/auth/logout', 'Admin\AdminSessionsController@destroy');
Route::resource('sessions', 'Admin\AdminSessionsController');


Route::group(['middleware' => 'moderator'], function()
{
    Route::get('admin', 'Admin\AdminHomeController@index');
    Route::resource('admin/user', 'Admin\AdminUserController');
    Route::get('admin/user/{user_id}/delete', 'Admin\AdminUserController@destroy');
});


Route::controllers([
	'admin/auth/auth'      => 'Auth\AuthController',
	'admin/auth/password'  => 'Auth\PasswordController'
]);

?>