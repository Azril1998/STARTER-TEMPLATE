<?php

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

  Route::get('/', function () {
  return view('welcome');
});

// -- Redirect Routes --
  Route::get('/test', function() {
  return 'Hello World';
});
  Route::get('/test2', function() {
  return 'Hello World Hello World Hello World';
});

// --View Routes --
  Route::redirect('/test', '/test2');
  Route::view('/greeting', 'greeting', ['name' => 'Febry']);

// -- Required Parameters --
  Route::get('/user/{id}', function($id) {
  return "user " .$id;
  });
  Route::get('/user/{id}/{nama}/{alamat}', function($id, $nama, $alamat) {
  $text = "user id = ".$id.", Nama= ".$nama.", Alamat= ".$alamat;
  return $text;
  });

// -- Optional Parameters --
    Route::get('/user/{name?}', function($name = null) {
    return "hai ".$name;
});
    Route::get('/user/{name?}', function($name = 'John Doe') {
    return "hai ".$name;
});

// -- Regular Expression Constraints --
    Route::get('/user/{name}', function($name) {
    return 'Hai '.$name.'...!';
})->where('name', '[A-Za-z]+');
    Route::get('/user_id/{id}', function($id) {
    return 'user id anda adalah '.$id;
})->where('id', '[0-9]+');
    Route::get('/user_akun/{id}/{name}', function($id, $name) {
    return 'Hai  '.$name.', user id anda adalah '.$id;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

// -- Named Routes --
    Route::get('/greeting', function() {
    return view('greeting');
});
   Route::get('/user/profile', function() {
    return "Hello There...";
})->name('profile');

// -- Controller --
    Route::get('/user/{name}', 'UserController@show');
    Route::get('foo', 'Photos\AdminController@method');

// -- Resource Controller --
    Route::resource('photos', 'PhotoController');

// -- View --
    Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});
    Route::get('/', function() {
    return view('admin.profile', $data);
});

// -- Blade --
//  Template
    Route::get('/', function() {
    return view('tryblade.child');
});
//  Menampilkan Data
    Route::get('greeting', function() {
    return view('welcome', ['name' => 'Jonathan']);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -- Otentikasi --
//  Pengaturan Route
    Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])
    ->name('admin.home')
    ->middleware('is_admin');
