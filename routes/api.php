<?php

use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SchedulingBannerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/playlists/banners', [PlaylistController::class, 'banners']);

Route::get('/playlists', [PlaylistController::class, 'list']);

Route::get('/playlists/{slug}', [PlaylistController::class, 'get']);

Route::get('/episodes/news',[EpisodeController::class, 'news']);

Route::get('/episodes/all',[EpisodeController::class, 'all']);

Route::get('/episodes/top-five',[EpisodeController::class, 'topFive']);

Route::get('/episodes/watched',[EpisodeController::class, 'getWatched']);

Route::get('/scheduling-banners',[SchedulingBannerController::class, 'all']);
