<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
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
    return view('home');
});

Route::get('/servicios', function () {
    return view('services');
});

Route::get('/portafolio', function () {
    return view('portfolio');
});

Route::get('/contacto', function () {
    return view('contact');
});



Route::get('/sitemap.xml', function () {
    return Sitemap::create()
        ->add(Url::create('/')->setPriority(1.0))
        ->add(Url::create('/servicios')->setPriority(0.8))
        ->add(Url::create('/portafolio')->setPriority(0.8))
        ->add(Url::create('/contacto')->setPriority(0.6))
        ->toResponse(request());
});
