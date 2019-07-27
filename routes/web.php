<?php

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

Route::get('{any}', function () {
    return view('welcome');
})->where('any','.*');

// voter

Route::post('/getVoter','VoterController@getVoter')->name('getVoter');

Route::post('/voteCandidate','CandidateController@voteCandidate')->name('voteCandidate');

Route::post('/getCandidateScore','CandidateController@getCandidateScore')->name('getCandidateScore');
