<?php

use App\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('institutions', 'InstitutionController@index');
Route::get('institutions/{institution}', 'InstitutionController@show');
Route::post('institutions', 'InstitutionController@store');
Route::put('institutions/{institution}', 'InstitutionController@update');
Route::delete('institutions/{institution}', 'InstitutionController@delete');

/////
Route::get('pets', 'PetController@index');
Route::get('pets/{pet}', 'PetController@show');
Route::post('pets', 'PetController@store');
Route::put('pets/{pet}', 'PetController@update');
Route::delete('pets/{pet}', 'PetController@delete');

////
Route::get('breeds', 'BreedController@index');
