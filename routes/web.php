<?php
use App\Http\Controllers\productcontroller;
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


//Route::get('/',[productcontroller::class,'product']);
Route::get('/product_category',[productcontroller::class,'createcategory']);
Route::get('/',[productcontroller::class,'getAllGenre']);
Route::post('/productread',[productcontroller::class,'store']);
Route::get('/productview',[productcontroller::class,'productview']);
Route::post('/product_insert',[productcontroller::class,'store_product']);
Route::post('/categorysearch',[productcontroller::class,'search']);