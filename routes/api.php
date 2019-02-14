<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('sketches', ['middleware' => 'cors','uses' => 'SketchesController@index']);
Route::get('sketches/{id}', ['middleware' => 'cors','uses' => 'SketchesController@show']);
Route::post('sketches', ['middleware' => 'cors','uses' => 'SketchesController@store']);
Route::delete('sketches/{sketch}', ['middleware' => 'cors','uses' => 'SketchesController@delete']);

Route::get('featuredseries', ['middleware' => 'cors','uses' => 'SketchesController@featuredseries']);
