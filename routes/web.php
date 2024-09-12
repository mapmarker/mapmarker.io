<?php

use App\Http\Controllers\ChangelogController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\EditorController;
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
Route::get('/sitemap.xml', [HomeController::class, 'sitemap']);
Route::get('/license', [HomeController::class, 'license']);
Route::get('/privacy', [HomeController::class, 'privacy']);
Route::get('/terms', [HomeController::class, 'terms']);
Route::get('/changelog', [ChangelogController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Editor Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for the interactive editors.
|
*/
Route::group(['prefix' => 'editor'], function () {
    Route::get('/', [EditorController::class, 'show']);
});

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
    Route::get('/versions', [DocumentationController::class, 'versions']);

    Route::group(['prefix' => 'integrations'], function () {
        Route::get('/', [DocumentationController::class, 'integrations']);
        Route::get('/bing-maps', [DocumentationController::class, 'integrationsBingMaps']);
        Route::get('/google-maps', [DocumentationController::class, 'integrationsGoogleMaps']);
        Route::get('/mapbox', [DocumentationController::class, 'integrationsMapbox']);
    });

    Route::group(['prefix' => 'font-awesome'], function () {
        Route::get('/', [DocumentationController::class, 'fontAwesome']);

        Route::group(['prefix' => 'v6'], function () {
            Route::get('/', [DocumentationController::class, 'fontAwesomeV6']);
            Route::get('/pins', [DocumentationController::class, 'fontAwesomeV6Pins']);
            Route::get('/icons', [DocumentationController::class, 'fontAwesomeV6Icons']);
            Route::get('/icon-stacks', [DocumentationController::class, 'fontAwesomeV6IconStacks']);
        });

        Route::group(['prefix' => 'v5'], function () {
            Route::get('/', [DocumentationController::class, 'fontAwesomeV5']);
            Route::get('/pins', [DocumentationController::class, 'fontAwesomeV5Pins']);
            Route::get('/icons', [DocumentationController::class, 'fontAwesomeV5Icons']);
            Route::get('/icon-stacks', [DocumentationController::class, 'fontAwesomeV5IconStacks']);
        });

        Route::group(['prefix' => 'v4'], function () {
            Route::get('/', [DocumentationController::class, 'fontAwesomeV4']);
            Route::get('/pins', [DocumentationController::class, 'fontAwesomeV4Pins']);
            Route::get('/icons', [DocumentationController::class, 'fontAwesomeV4Icons']);
            Route::get('/icon-stacks', [DocumentationController::class, 'fontAwesomeV4IconStacks']);
        });
    });
});

/*
|--------------------------------------------------------------------------
| Map Marker Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for map markers
|
*/
Route::group(['prefix' => 'api', 'namespace' => '\App\Http\Controllers\API', 'middleware' => ['api']], function () {
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

    Route::group(['prefix' => 'v3', 'namespace' => 'v3'], function () {
        // FONT-AWESOME
        Route::group(['prefix' => 'font-awesome', 'namespace' => 'FontAwesome'], function () {
            // FONT-AWESOME 6
            Route::group(['prefix' => 'v6', 'namespace' => 'v6'], function () {
                Route::get('icon', 'IconController@show');
                Route::get('pin', 'PinController@show');
                Route::get('icon-stack', 'IconStackController@show');
            });
        });
    });
});
