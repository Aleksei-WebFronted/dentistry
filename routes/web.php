<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RecordController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\WordController;
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

// Route::post('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $words = DB::table('words')->get();
    return view('index', compact('words'));
});

Route::get('/aboutus', function () {
    return view('aboutus');
});


Route::get('/price', function () {
    $prices = DB::table('prices')->get();
    return view('price', compact('prices'));
});




Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

Route::post('/reviews/submit', 'ReviewsController@submit')->name('reviews-form');

Route::get('/ourservice', function () {
    return view('ourservice');
});

Route::get('/healomc', function () {
    return view('healomc');
});

Route::get('/healdmc', function () {
    return view('healdmc');
});

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});

Route::get('/rights', function () {
    return view('rights');
});

Route::get('/clinic', function () {
    return view('clinic');
});

Route::get('/license', function () {
    return view('license');
});

Route::get('/requisites', function () {
    return view('requisites');
});

Route::get('/contact', function () {
    return view('contact');
});




Route::get('/contact/all{id}', 'App\Http\Controllers\Admin\ContactController@showOneMessage')->name('contact-data-one');
Route::get('/contact/all{id}/update', 'App\Http\Controllers\Admin\ContactController@updateMessage')->name('contact-update');
Route::get('/contact/all{id}/delete', 'App\Http\Controllers\Admin\ContactController@deleteMessage')->name('contact-delete');
Route::post('/contact/all{id}/update', 'App\Http\Controllers\Admin\ContactController@updateMessageSubmit')->name('contact-update-submit');
Route::get('/contact/all', 'App\Http\Controllers\Admin\ContactController@allData')->name('contact-data');
Route::post('/contact', 'App\Http\Controllers\Admin\ContactController@submit');



Route::post('/category', 'App\Http\Controllers\Admin\CategoryController@store');
Route::post('/contact', 'App\Http\Controllers\Admin\ContactController@store');
Route::post('/aboutus/store', 'App\Http\Controllers\Admin\RecordController@store');
Route::post('/index/store', 'App\Http\Controllers\Admin\RecordController@store');
Route::post('/price/store', 'App\Http\Controllers\Admin\RecordController@store');
Route::post('/clinic/store', 'App\Http\Controllers\Admin\RecordController@store');
Route::post('/requisites/store', 'App\Http\Controllers\Admin\RecordController@store');
Route::post('/category/store', 'App\Http\Controllers\Admin\RecordController@store');
Route::post('/contact/store', 'App\Http\Controllers\Admin\RecordController@store');
Route::post('/ourservice/store', 'App\Http\Controllers\Admin\RecordController@store');
Route::post('/healomc/store', 'App\Http\Controllers\Admin\RecordController@store');
Route::post('/healdmc/store', 'App\Http\Controllers\Admin\RecordController@store');
Route::post('/privacypolicy/store', 'App\Http\Controllers\Admin\RecordController@store');
Route::post('/rights/store', 'App\Http\Controllers\Admin\RecordController@store');
Route::get('/category', function () {
    $categories = DB::table('categories')->get();
    return view('category', compact('categories'));
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/client', [PostController::class, 'Submit']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
    
    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('category', 'App\Http\Controllers\Admin\CategoryController');
    Route::resource('record', 'App\Http\Controllers\Admin\RecordController');
    Route::resource('user', 'App\Http\Controllers\Admin\UserController');
    Route::resource('contact', 'App\Http\Controllers\Admin\ContactController');
    Route::resource('word', 'App\Http\Controllers\Admin\WordController');
    Route::resource('price', 'App\Http\Controllers\Admin\PriceController');
    Route::resource('post', PostController::class);
});


