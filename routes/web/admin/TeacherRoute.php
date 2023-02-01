<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth', 'admin'], 'namespace' => 'App\Http\Controllers\Admin\Teacher'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::group(['prefix' => 'teachers', 'as' => 'teachers.'], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'TeacherController@index'
            ]);
            Route::get('/create', [
                'as' => 'create',
                'uses' => 'TeacherController@create'
            ]);
            Route::post('/store', [
                'as' => 'store',
                'uses' => 'TeacherController@store'
            ]);
            Route::get('/{teacher}/edit', [
                'as' => 'edit',
                'uses' => 'TeacherController@edit'
            ]);
            Route::put('{teacher}/update', [
                'as' => 'update',
                'uses' => 'TeacherController@update'
            ]);
            Route::delete('{teacher}/destroy', [
                'as' => 'destroy',
                'uses' => 'TeacherController@destroy'
            ]);
        });
        Route::group(['middleware' => ['is.ajax'], 'prefix' => 'teachers-ajax', 'as' => 'teachers.ajax.'], function () {
            Route::get('/getDatatableData', [
                'as' => 'getDatatableData',
                'uses' => 'TeacherAjaxController@getDatatableData'
            ]);
        });
    });
});
