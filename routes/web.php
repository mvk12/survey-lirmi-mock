<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/survey/get_survey_list_by_user', \App\Http\Controllers\GetSurveyListByUser::class)
    ->name('survey.get_survey_list_by_user');

Route::get('/view/{uuid}', function ($uuid) {
    return response('Survey with UUID: '.$uuid);
})->name('survey.view');
