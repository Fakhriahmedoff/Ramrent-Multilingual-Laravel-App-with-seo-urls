<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PagesController;
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
    return redirect(app()->getLocale());
});
Route::get('/{locale}/lang', function ($locale) {
    App::setLocale($locale);
    Session::put('locale', $locale);
    return redirect()->back();
});

$lang = Request::segment(1);
if($lang == 'az'){
    Route::group(
        [
            'prefix' => 'az',
            'where' => ['locale' => '[a-zA-Z]{2}'],
            'middleware' => 'setlocale'
        ], function () {
            Route::get('/{slug}',[PagesController::class,'getPage'] );
    });
}
if($lang == 'en'){
Route::group(
    [
        'prefix' => 'en',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale'
    ], function () {
        Route::get('/{slug}',[PagesController::class,'getPage'] );
});
}
if($lang == 'ru'){
Route::group(
    [
        'prefix' => 'ru',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale'
    ], function () {
        Route::get('/{slug}',[PagesController::class,'getPage'] );
});
}

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
