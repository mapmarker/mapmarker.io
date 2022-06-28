<?php

use App\Http\Controllers\ChangelogController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/license', [HomeController::class, 'license']);
Route::get('/privacy', [HomeController::class, 'privacy']);
Route::get('/terms', [HomeController::class, 'terms']);
Route::get('/changelog', [ChangelogController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Documentation Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for our docs.
|
*/
Route::group(['prefix' => 'documentation'], function () {
    Route::get('/', [DocumentationController::class, 'index']);
});

/*
|--------------------------------------------------------------------------
| Map Marker Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for map markers
|
*/
Route::group(['prefix' => 'api', 'namespace' => '\App\Http\Controllers\API', 'middleware' => 'api'], function () {
    Route::group(['prefix' => 'v1', 'namespace' => 'v1'], function () {

        // LEGACY
        Route::get('pin', 'PinController@show');
        Route::get('fa', 'FaController@show');
        Route::get('fa/stack', 'FaStackController@show');

        // FONT-AWESOME
        Route::group(['prefix' => 'font-awesome', 'namespace' => 'FontAwesome'], function () {
            // FONT-AWESOME 4
            Route::group(['prefix' => 'v4', 'namespace' => 'v4'], function () {
                Route::get('pin', 'PinController@show');
                Route::get('icon', 'IconController@show');
                Route::get('icon-stack', 'IconStackController@show');
            });

            // FONT-AWESOME 5
            Route::group(['prefix' => 'v5', 'namespace' => 'v5'], function () {
                Route::get('pin', 'PinController@show');
                Route::get('icon', 'IconController@show');
                Route::get('icon-stack', 'IconStackController@show');
            });
        });
    });

    Route::group(['prefix' => 'v2', 'namespace' => 'v2'], function () {
        // FONT-AWESOME
        Route::group(['prefix' => 'font-awesome', 'namespace' => 'FontAwesome'], function () {
            // FONT-AWESOME 5
            Route::group(['prefix' => 'v5', 'namespace' => 'v5'], function () {
                Route::get('pin', 'PinController@show');
                Route::get('icon', 'IconController@show');
                Route::get('icon-stack', 'IconStackController@show');
            });
        });
    });
});
