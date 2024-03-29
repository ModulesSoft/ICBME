<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/locale/toggle', 'LocaleController@toggleLocale')->name('locale.toggle');
Route::post('/year/change', 'YearController@changeYear')->name('year.change');
Auth::routes(['register' => false]);
Route::get('/', 'HomeController@index')->name('home');
Route::resource('speakers', 'SpeakersController')->only('show')->name('show', 'speaker');
Route::resource('news', 'NewsController')->only(['index', 'show'])->name('index', 'news')->name('show', 'new');
Route::resource('committees', 'CommitteesController')->only('index')->name('index', 'committees');
Route::resource('sponsors', 'SponsorsController')->only('index')->name('index', 'sponsors');
Route::resource('authors', 'AuthorsController')->only(['index', 'show'])->name('index', 'authors')->name('show', 'author');
Route::resource('galleries', 'GalleriesController')->only('index')->name('index', 'galleries');
Route::resource('workshops', 'WorkshopsController')->only('index')->name('index', 'workshops');
Route::get('poster', 'PostersController@show')->name('poster');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Settings
    Route::delete('settings/destroy', 'SettingsController@massDestroy')->name('settings.massDestroy');
    Route::resource('settings', 'SettingsController');

    // Speakers
    Route::delete('speakers/destroy', 'SpeakersController@massDestroy')->name('speakers.massDestroy');
    Route::post('speakers/media', 'SpeakersController@storeMedia')->name('speakers.storeMedia');
    Route::resource('speakers', 'SpeakersController');

    // Schedules
    Route::delete('schedules/destroy', 'ScheduleController@massDestroy')->name('schedules.massDestroy');
    Route::resource('schedules', 'ScheduleController');

    // Venues
    Route::delete('venues/destroy', 'VenuesController@massDestroy')->name('venues.massDestroy');
    Route::post('venues/media', 'VenuesController@storeMedia')->name('venues.storeMedia');
    Route::resource('venues', 'VenuesController');

    // Committees
    Route::delete('committees/destroy', 'CommitteesController@massDestroy')->name('committees.massDestroy');
    Route::post('committees/media', 'CommitteesController@storeMedia')->name('committees.storeMedia');
    Route::resource('committees', 'CommitteesController');

    // Hotels
    Route::delete('hotels/destroy', 'HotelsController@massDestroy')->name('hotels.massDestroy');
    Route::post('hotels/media', 'HotelsController@storeMedia')->name('hotels.storeMedia');
    Route::resource('hotels', 'HotelsController');

    // Workshops
    Route::delete('workshops/destroy', 'WorkshopsController@massDestroy')->name('workshops.massDestroy');
    Route::post('workshops/media', 'WorkshopsController@storeMedia')->name('workshops.storeMedia');
    Route::resource('workshops', 'WorkshopsController');

    // Authors
    Route::delete('authors/destroy', 'AuthorsController@massDestroy')->name('authors.massDestroy');
    Route::post('authors/media', 'AuthorsController@storeMedia')->name('authors.storeMedia');
    Route::resource('authors', 'AuthorsController');

    // news
    Route::delete('news/destroy', 'NewsController@massDestroy')->name('news.massDestroy');
    Route::post('news/media', 'NewsController@storeMedia')->name('news.storeMedia');
    Route::resource('news', 'NewsController');

    // Galleries
    Route::delete('galleries/destroy', 'GalleriesController@massDestroy')->name('galleries.massDestroy');
    Route::post('galleries/media', 'GalleriesController@storeMedia')->name('galleries.storeMedia');
    Route::resource('galleries', 'GalleriesController');

    // Sponsors
    Route::delete('sponsors/destroy', 'SponsorsController@massDestroy')->name('sponsors.massDestroy');
    Route::post('sponsors/media', 'SponsorsController@storeMedia')->name('sponsors.storeMedia');
    Route::resource('sponsors', 'SponsorsController');

    // Faqs
    Route::delete('faqs/destroy', 'FaqsController@massDestroy')->name('faqs.massDestroy');
    Route::resource('faqs', 'FaqsController');

    // Amenities
    Route::delete('amenities/destroy', 'AmenitiesController@massDestroy')->name('amenities.massDestroy');
    Route::resource('amenities', 'AmenitiesController');

    // Prices
    Route::delete('prices/destroy', 'PricesController@massDestroy')->name('prices.massDestroy');
    Route::resource('prices', 'PricesController');
});
