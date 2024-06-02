<?php

// Routes for admin panel
Route::get('/', 'PageController@dashboard')->name('backend.home');

 // page
Route::get('/page', 'PageController@index')->name('backend.page.index');
Route::get('/page/data', 'PageController@data')->name('backend.page.data');
Route::get('/page/form/{id?}', 'PageController@getForm')->name('backend.page.getform');
Route::post('/page/form/{id?}', 'PageController@postForm')->name('backend.page.postform');
Route::get('/page/results', 'PageController@results')->name('backend.page.results');
Route::post('/page/results', 'PageController@postResults')->name('backend.page.postResults');
Route::post('/page/delete', 'PageController@delete')->name('backend.page.delete');


// News 
Route::get('/news', 'NewsController@index')->name('backend.news.index');
Route::get('/news/data', 'NewsController@data')->name('backend.news.data');
Route::get('/news/form/{id?}', 'NewsController@getForm')->name('backend.news.getform');
Route::post('/news/form/{id?}', 'NewsController@postForm')->name('backend.news.postform');
Route::post('/news/delete', 'NewsController@delete')->name('backend.news.delete');

// PhotoGallery
Route::get('/photogallery', 'PhotoGalleryController@index')->name('backend.photogallery.index');
Route::get('/photogallery/data', 'PhotoGalleryController@data')->name('backend.photogallery.data');
Route::post('/photogallery/form', 'PhotoGalleryController@form')->name('backend.photogallery.form');
Route::post('/photogallery/delete', 'PhotoGalleryController@delete')->name('backend.photogallery.delete');

// Faq
Route::get('/faq', 'FaqController@index')->name('backend.faq.index');
Route::get('/faq/data', 'FaqController@data')->name('backend.faq.data');
Route::get('/faq/form/{id?}', 'FaqController@getForm')->name('backend.faq.getform');
Route::post('/faq/form/{id?}', 'FaqController@postForm')->name('backend.faq.postform');
Route::post('/faq/delete', 'FaqController@delete')->name('backend.faq.delete');

// Acca
Route::get('/acca', 'AccaController@index')->name('backend.acca.index');
Route::get('/acca/data', 'AccaController@data')->name('backend.acca.data');
Route::get('/acca/form/{id?}', 'AccaController@getForm')->name('backend.acca.getform');
Route::post('/acca/form/{id?}', 'AccaController@postForm')->name('backend.acca.postform');
Route::post('/acca/delete', 'AccaController@delete')->name('backend.acca.delete');

// Licenses
Route::get('/licenses', 'LicensesController@index')->name('backend.licenses.index');
Route::get('/licenses/data', 'LicensesController@data')->name('backend.licenses.data');
Route::post('/licenses/form', 'LicensesController@form')->name('backend.licenses.form');
Route::post('/licenses/delete', 'LicensesController@delete')->name('backend.licenses.delete');

// Link
Route::get('/video', 'VideoController@index')->name('backend.video.index');
Route::get('/video/data', 'VideoController@data')->name('backend.video.data');
Route::post('/video/form', 'VideoController@form')->name('backend.video.form');
Route::post('/video/delete', 'VideoController@delete')->name('backend.video.delete');

// Filemanager
Route::get('/filemanager', 'PageController@filemanager')->name('backend.fm.index');


// Feedback
Route::get('/contact', 'ContactController@index')->name('backend.contact.index');
Route::get('/contact/data', 'ContactController@data')->name('backend.contact.data');
Route::post('/contact/delete', 'ContactController@delete')->name('backend.contact.delete');
Route::post('contact/change', 'ContactController@postChange')->name('backend.contact.change');


// User settings 
Route::get('/settings', 'SettingController@index')->name('backend.setting');
Route::post('/settings', 'SettingController@post');