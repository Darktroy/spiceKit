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
Route::get('/', 'HomeController@normalHome');

//Route::get('/', function () {
//    return view('divira.index');
//    
////    return view('divira.clients.goodsaltz.break');
//});

Route::get('/menu', 'MenuItemsController@indexHome')->name('menu_items.menu_items.index');
Route::get('/menuList/{menu_id}', 'MenuItemsController@indexHome')->name('menu_items.menu_items.index');
Route::get('/submenuList/{menu_id}/{submenuid}', 'MenuItemsController@subindexHome')->name('menu_items.menu_items.index');
Route::get('/thegallery', 'GalleriesController@indexHome');
Route::get('/about-us', 'HomeController@aboutUs');
Route::get('/contact-us', 'ContactUsesController@create');
    

Route::group(['middleware' => ['auth']], function () {

    Route::get('/homeop', 'HomeController@index');
    Route::post('/Home-Side', 'HomepagesController@indexSettingUpdate');
    Route::get('/change-logo', 'HomepagesController@logoSetting')->name('changeLogo');
    Route::get('/home-page-setting', 'HomepagesController@indexSetting')->name('homeSeetingindex');
    Route::get('/show-contact-us', 'ContactUsesController@index')->name('showContactUs.index');
    Route::get('/destroy-contact-us/{contactUs}','ContactUsesController@destroy')->where('id', '[0-9]+');
    
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

//Route::get('/remove/{menuItems}', function () {
//    return 123;
//});
        Route::get('/remove/{menuItems}','MenuItemsController@destroy')->name('menu_items.menu_items.destroy')->where('id', '[0-9]+');

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
    Route::group(
[
    'prefix' => 'bg_images',
], function () {

    Route::get('/', 'BgImagesController@index')
         ->name('bg_images.bg_images.index');

    Route::get('/create','BgImagesController@create')
         ->name('bg_images.bg_images.create');

    Route::get('/show/{bgImages}','BgImagesController@show')
         ->name('bg_images.bg_images.show')
         ->where('id', '[0-9]+');

    Route::get('/{bgImages}/edit','BgImagesController@edit')
         ->name('bg_images.bg_images.edit')
         ->where('id', '[0-9]+');

    Route::post('/upload', 'BgImagesController@store')
         ->name('bg_images.bg_images.store');
               
    Route::put('bg_images/{bgImages}', 'BgImagesController@update')
         ->name('bg_images.bg_images.update')
         ->where('id', '[0-9]+');

    Route::get('/del-bg_images/{bgImages}','BgImagesController@destroy')
         ->name('bg_images.bg_images.destroy')
         ->where('id', '[0-9]+');

});

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(
[
    'prefix' => 'menus',
], function () {

    Route::get('/', 'MenusController@index')
         ->name('menus.menu.index');

    Route::get('/create','MenusController@create')
         ->name('menus.menu.create');

    Route::get('/show/{menu}','MenusController@show')
         ->name('menus.menu.show')
         ->where('id', '[0-9]+');

    Route::get('/{menu}/edit','MenusController@edit')
         ->name('menus.menu.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'MenusController@store')
         ->name('menus.menu.store');
               
    Route::put('menu/{menu}', 'MenusController@update')
         ->name('menus.menu.update')
         ->where('id', '[0-9]+');

    Route::delete('/menu/{menu}','MenusController@destroy')
         ->name('menus.menu.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'contactus',
], function () {

    Route::get('/', 'ContactUsesController@index')
         ->name('contact_uses.contact_us.index');

    Route::get('/create','ContactUsesController@create')
         ->name('contact_uses.contact_us.create');

    Route::get('/show/{contactUs}','ContactUsesController@show')
         ->name('contact_uses.contact_us.show')
         ->where('id', '[0-9]+');

    Route::get('/{contactUs}/edit','ContactUsesController@edit')
         ->name('contact_uses.contact_us.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'ContactUsesController@store')
         ->name('contact_uses.contact_us.store');
               
    Route::put('contact_us/{contactUs}', 'ContactUsesController@update')
         ->name('contact_uses.contact_us.update')
         ->where('id', '[0-9]+');

    Route::delete('/contact_us/{contactUs}','ContactUsesController@destroy')
         ->name('contact_uses.contact_us.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'homepages',
], function () {

    Route::get('/', 'HomepagesController@index')
         ->name('homepages.homepage.index');

    Route::get('/create','HomepagesController@create')
         ->name('homepages.homepage.create');

    Route::get('/show/{homepage}','HomepagesController@show')
         ->name('homepages.homepage.show')
         ->where('id', '[0-9]+');

    Route::get('/{homepage}/edit','HomepagesController@edit')
         ->name('homepages.homepage.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'HomepagesController@store')
         ->name('homepages.homepage.store');
               
    Route::put('homepage/{homepage}', 'HomepagesController@update')
         ->name('homepages.homepage.update')
         ->where('id', '[0-9]+');

    Route::delete('/homepage/{homepage}','HomepagesController@destroy')
         ->name('homepages.homepage.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'submenus',
], function () {

    Route::get('/', 'SubmenusController@index')
         ->name('submenus.submenu.index');

    Route::get('/create','SubmenusController@create')
         ->name('submenus.submenu.create');

    Route::get('/show/{submenu}','SubmenusController@show')
         ->name('submenus.submenu.show')
         ->where('id', '[0-9]+');

    Route::get('/{submenu}/edit','SubmenusController@edit')
         ->name('submenus.submenu.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'SubmenusController@store')
         ->name('submenus.submenu.store');
               
    Route::put('submenu/{submenu}', 'SubmenusController@update')
         ->name('submenus.submenu.update')
         ->where('id', '[0-9]+');

    Route::delete('/submenu/{submenu}','SubmenusController@destroy')
         ->name('submenus.submenu.destroy')
         ->where('id', '[0-9]+');

});
