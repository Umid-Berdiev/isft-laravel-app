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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localizationRedirect', 'localeViewPath', 'localize']
    ],
    function () {
        Route::get('/', 'PageController@index')->name('home');
        Route::get('/about', 'PageController@about')->name('about');

        Route::get('/page/zhizni-kampusa', 'PageController@listZhizniKampusa')->name('page.list.zhizni-kampusa');
        Route::get('/page/zhizni-kampusa/{id}', 'PageController@showZhizniKampusa')->name('page.show.zhizni-kampusa');
        Route::get('/page/{alias}', 'PageController@show')->name('page.show');

        Route::get('/curriculum', 'PageController@curriculum')->name('curriculum');

        Route::get('/admission', 'PageController@admission')->name('admission');

        Route::get('/results', 'PageController@results')->name('results');

        Route::get('/management', 'ManagementController@index')->name('management');
        Route::post('/management/post', 'ManagementController@post');

        // Route::get('/about', function () {
        //     return view('frontend.page.about');
        // });

        // Route::get('/curriculum', function () {
        //     return view('frontend.page.curriculum');
        // });

        // Route::get('/admission', function () {
        //     return view('frontend.page.admission');
        // });

        // News
        Route::get('/news', 'NewsController@index')->name('news');
        Route::get('/news/show/{alias?}', 'NewsController@show')->name('news.show');

        // Gallery
        Route::get('/gallery', 'PhotoGalleryController@index')->name('photo');

        // Faq
        Route::get('/faq', 'FaqController@index')->name('faq');

        // Acca
        Route::get('/acca', 'AccaController@index')->name('acca');

        // contact
        Route::get('/contacts', 'ContactController@index')->name('contact');
        Route::post('/contacts/post', 'ContactController@post');

        Route::post('/subscribe', 'SubscribeController@post');
    }
);


Route::auth();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
