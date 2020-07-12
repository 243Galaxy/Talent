<?php

use Illuminate\Support\Facades\Route;
use App\Talent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/talents', 'TalentController@index');
Route::post('/talents{id}', 'TalentController@button');
Route::get('talents/create', 'TalentController@create');
Route::post('/talents', 'TalentController@store');
Route::get('/talents/{id}', 'TalentController@show');


Route::prefix('admin')
    ->name('admin.')
    ->group(function(){
        Route::prefix('talents')
            ->name('talents.')
            ->group(function(){
                Route::get('/', 'Admin\TalentPanelController@index')->name('index');
                Route::get('approved', 'Admin\TalentPanelController@approved')->name('approved');
                Route::get('unapproved', 'Admin\TalentPanelController@unapproved')->name('unapproved');
                //Actions
                Route::get('{talentId}/approve', 'Admin\TalentPanelController@doApprove')->name('approve');
                Route::get('{talentId}/unapprove', 'Admin\TalentPanelController@doUnApprove')->name('unapprove');
            });
    });