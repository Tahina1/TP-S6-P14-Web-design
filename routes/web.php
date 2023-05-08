<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the 'web' middleware group. Make something great!
|
*/

Route::get('/', [ArticleController::class,'index']);

Route::get('/create-article', [ArticleController::class,'createForm']);
Route::post('/save-article', [ArticleController::class,'save']);

Route::get('/articles/{id}', [ArticleController::class,'detail']);

Route::get('/edit-article/{id}', [ArticleController::class,'editForm']);
Route::post('/update', [ArticleController::class,'update']);

Route::get('/delete-article/{id}', [ArticleController::class,'delete']);

Route::middleware('cache.headers:public;max_age=3600;etag')->group(function () {
    Route::get('/stats/{any}', function ($mylink) {
        $path = 'my-vendor/' . $mylink;

        // $path=str_replace('/','\\',$path);
        // dd(File::exists(($path)),$path);
        if (File::exists(($path))) {
            $contentType=(new MymeType())->mime_type($path);
            $response = new Illuminate\Http\Response(File::get(($path)), 200);
            $response->header('Content-Type', $contentType);
            return $response;
        } else {
            abort(404);
        }
    })->where('any', '.*');
});




Route::get('/loginForm',[AdminController::class, 'loginForm']);
Route::post('/login',[AdminController::class, 'login']);
Route::get('/logout',[AdminController::class, 'logout']);




