<?php

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/store/{kategori?}/{item?}/{kedai?}', function($kategori=null, $item=null, $kedai=null) {
    $kategori = request("kategori");

    if(isset($kategori)){

        if(isset($item)){

            if(isset($kedai)){
                return "this is for kedai name {$kedai}";
            }
            return "you are viewing the store for {$kategori} for {$item}";
        }

        return "you are viewing ini store for " .strip_tags($kategori);
    }

    return "you are viewing ini aja namanya";
});
