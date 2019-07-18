<?php

use Illuminate\Http\Request;
Route::get('funcionarios/list', 'FuncionariosController@index');
Route::get('funcionarios/show/{id}', 'FuncionariosController@show');
Route::post('funcionarios/create', 'FuncionariosController@store');
Route::post('funcionarios/update', 'FuncionariosController@update');
Route::post('funcionarios/destroy', 'FuncionariosController@delete');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

