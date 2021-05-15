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
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('meals')->name('meals/')->group(static function() {
            Route::get('/',                                             'MealsController@index')->name('index');
            Route::get('/create',                                       'MealsController@create')->name('create');
            Route::post('/',                                            'MealsController@store')->name('store');
            Route::get('/{meal}/edit',                                  'MealsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MealsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{meal}',                                      'MealsController@update')->name('update');
            Route::delete('/{meal}',                                    'MealsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('ingredients')->name('ingredients/')->group(static function() {
            Route::get('/',                                             'IngredientsController@index')->name('index');
            Route::get('/create',                                       'IngredientsController@create')->name('create');
            Route::post('/',                                            'IngredientsController@store')->name('store');
            Route::get('/{ingredient}/edit',                            'IngredientsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'IngredientsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{ingredient}',                                'IngredientsController@update')->name('update');
            Route::delete('/{ingredient}',                              'IngredientsController@destroy')->name('destroy');
        });
    });
});