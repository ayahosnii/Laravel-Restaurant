<?php

use App\Http\Controllers\Api\CustomerServerChatController;
use App\Http\Controllers\Api\CustomerServerMessageController;
use App\Http\Controllers\Apis\FetchBranchController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('posts',\App\Http\Controllers\PostController::class);
Route::apiResource('categories',\App\Http\Controllers\CategoryController::class);
Route::get('category/{slug}/posts',[\App\Http\Controllers\PostController::class, 'categoryPosts']);
Route::get('searchposts/{query}',[\App\Http\Controllers\PostController::class, 'searchposts']);


Route::post('fetch-branches', [FetchBranchController::class, 'fetchBranch']);


Route::get('conversation/{uuid}',[CustomerServerChatController::class, 'show']);
Route::post('message',[CustomerServerMessageController::class, 'store']);

Route::post('login', [\App\Http\Controllers\UserController::class, 'login']);
Route::post('register', [\App\Http\Controllers\UserController::class, 'register']);

Route::middleware('auth:api')->group(function () {
    Route::get('user', [\App\Http\Controllers\UserController::class, 'details']);
    //Route::post('comment/create', 'CommentController@store');
});
