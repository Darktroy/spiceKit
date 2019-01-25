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
Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function () {

    Route::get('/homeop', 'HomeController@index');
    Route::group(['prefix' => 'menu_types',], function () {

        Route::get('/', 'MenuTypesController@index')->name('menu_types.menu_type.index');

        Route::get('/create','MenuTypesController@create')->name('menu_types.menu_type.create');

        Route::get('/show/{menuType}','MenuTypesController@show')->name('menu_types.menu_type.show')->where('id', '[0-9]+');

        Route::get('/{menuType}/edit','MenuTypesController@edit')->name('menu_types.menu_type.edit')->where('id', '[0-9]+');

        Route::post('/', 'MenuTypesController@store')->name('menu_types.menu_type.store');

        Route::put('menu_type/{menuType}', 'MenuTypesController@update')->name('menu_types.menu_type.update')->where('id', '[0-9]+');

        Route::delete('/menu_type/{menuType}','MenuTypesController@destroy')->name('menu_types.menu_type.destroy')->where('id', '[0-9]+');

    });

    Route::group(['prefix' => 'menu_items',], function () {

        Route::get('/', 'MenuItemsController@index')->name('menu_items.menu_items.index');

        Route::get('/create','MenuItemsController@create')->name('menu_items.menu_items.create');

        Route::get('/show/{menuItems}','MenuItemsController@show')->name('menu_items.menu_items.show')->where('id', '[0-9]+');

        Route::get('/{menuItems}/edit','MenuItemsController@edit')->name('menu_items.menu_items.edit')->where('id', '[0-9]+');

//Route::post('menu_items_edit/{menuItems}', function () {
//    return 123;
//});
        Route::post('/add', 'MenuItemsController@store')->name('menu_items.menu_items.store');

        Route::post('menu_items_edit/{menuItems}', 'MenuItemsController@update')->name('menu_items.menu_items.update')->where('id', '[0-9]+');

        Route::get('/menu_items/remove/{menuItems}','MenuItemsController@destroy')->name('menu_items.menu_items.destroy')->where('id', '[0-9]+');

    });

    Route::group(['prefix' => 'galleries',], function () {

        Route::get('/', 'GalleriesController@index')->name('galleries.gallery.index');

        Route::get('/create','GalleriesController@create')->name('galleries.gallery.create');

        Route::get('/show/{gallery}','GalleriesController@show')->name('galleries.gallery.show')->where('id', '[0-9]+');

        Route::get('/{gallery}/edit','GalleriesController@edit')->name('galleries.gallery.edit')->where('id', '[0-9]+');

        Route::post('/store', 'GalleriesController@store')->name('galleries.gallery.store');

        Route::put('gallery/{gallery}', 'GalleriesController@update')->name('galleries.gallery.update')->where('id', '[0-9]+');

        Route::get('/del-gallery/{gallery}','GalleriesController@destroy')->name('galleries.gallery.destroy')->where('id', '[0-9]+');

    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
