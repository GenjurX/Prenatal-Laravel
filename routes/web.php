<?php

use App\Http\Controllers\XmlParser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReadXmlController;
use App\Http\Controllers\CategoryController;


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

Route::get('/resources/images/{filename}', function ($filename) {
    $path = resource_path() . '/images//' . $filename;

    if (!File::exists($path)) {
        return response()->json(['message' => 'Image not found.'], 404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('/', [HomeController::class, 'index'])->name('shop');

Route::get('/products/{product}', [HomeController::class, 'show'])->name('item');

Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category');

Route::match(["get", "post"], "read-xml", [ReadXmlController::class, 'index'])->name('xml-upload');

Route::get('/register', [UserController::class, 'create'])->name('create-user');

Route::post('/users', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login'])->name('log-in');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
