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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/course', function () {
    return view('frontend.pages.courses');
});
Route::get('/course_detail', function () {
    return view('frontend.pages.courses-detail');
});
Route::get('/event', function () {
    return view('frontend.pages.event');
});
Route::get('/event_detail', function () {
    return view('frontend.pages.event_detail');
});
Route::get('/news', function () {
    return view('frontend.pages.news');
});
Route::get('/news_detail', function () {
    return view('frontend.pages.news_detail');
});
Route::get('/staff', function () {
    return view('frontend.pages.staff');
});
Route::get('/staff_detail', function () {
    return view('frontend.pages.staff-detail');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});