<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes: User
|--------------------------------------------------------------------------
|
|
*/

Route::group([
    'prefix' => 'resource/admin/users',
    'middleware' => config('playground-admin-resource.middleware.auth'),
    'namespace' => '\Playground\Admin\Resource\Http\Controllers',
], function () {
    Route::get('/', [
        'as' => 'playground.admin.resource.users',
        'uses' => 'UserController@index',
    ]);

    // UI

    Route::get('/create', [
        'as' => 'playground.admin.resource.users.create',
        'uses' => 'UserController@create',
    ]);

    Route::get('/edit/{id}', [
        'as' => 'playground.admin.resource.users.edit',
        'uses' => 'UserController@edit',
    ])->whereUuid('id');

    // Route::get('/go/{id}', [
    //     'as'   => 'playground.admin.resource.users.go',
    //     'uses' => 'UserController@go',
    // ]);

    Route::get('/{id}', [
        'as' => 'playground.admin.resource.users.show',
        'uses' => 'UserController@show',
    ])->whereUuid('id');

    // API

    if (! empty(config('playground-admin-resource.users.lockable'))) {
        Route::put('/lock/{id}', [
            'as' => 'playground.admin.resource.users.lock',
            'uses' => 'UserController@lock',
        ])->whereUuid('id');

        Route::delete('/lock/{id}', [
            'as' => 'playground.admin.resource.users.unlock',
            'uses' => 'UserController@unlock',
        ])->whereUuid('id');
    }

    if (! empty(config('playground-admin-resource.users.trashable'))) {
        Route::delete('/{id}', [
            'as' => 'playground.admin.resource.users.destroy',
            'uses' => 'UserController@destroy',
        ])->whereUuid('id');

        Route::put('/restore/{id}', [
            'as' => 'playground.admin.resource.users.restore',
            'uses' => 'UserController@restore',
        ])->whereUuid('id')
            ->withTrashed();
    }

    Route::post('/', [
        'as' => 'playground.admin.resource.users.post',
        'uses' => 'UserController@store',
    ]);

    // Route::put('/', [
    //     'as'   => 'playground.admin.resource.users.put',
    //     'uses' => 'UserController@store',
    // ]);
    //
    // Route::put('/{id}', [
    //     'as'   => 'playground.admin.resource.users.put.id',
    //     'uses' => 'UserController@store',
    // ])->whereUuid('id');

    Route::patch('/{id}', [
        'as' => 'playground.admin.resource.users.patch',
        'uses' => 'UserController@update',
    ])->whereUuid('id');
});
