<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.home.home');
});

Route::get('home', function () {
    return view('frontend.home.home');
});

Route::get('blog', function () {
    return view('frontend.pages.blog');
});


Route::get('blog-detail', function () {
    return view('frontend.pages.blog-detail');
});

Route::get('about-us', function () {
    return view('frontend.pages.about-us');
});

Route::get('contact-us', function () {
    return view('frontend.pages.contact-us');
});

Route::get('service', function () {
    return view('frontend.pages.service');
});

Route::get('service-detail', function () {
    return view('frontend.pages.service-detail');
});

Route::get('program-detail', function () {
    return view('frontend.pages.program-detail');
});

Route::get('faq', function () {
    return view('frontend.pages.faq');
});

Route::get('term-condition', function () {
    return view('frontend.pages.term-condition');
});

Route::get('privacy-policy', function () {
    return view('frontend.pages.privacy-policy');
});

Route::get('career-detail', function () {
    return view('frontend.pages.career-detail');
});

Route::get('career', function () {
    return view('frontend.pages.career');
});

Route::get('link', function () {
    return view('frontend.link.link');
});