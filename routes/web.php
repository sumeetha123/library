<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\NewspaperController;




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


Route::get('/hey', function(){
    return "Hello this is test";
});

// Route::view('/homepg', 'home');
// Route::view('/signup', 'signup');
// Route::view('/login', 'login');

// Route::get('/homepg', function(){
//     return view('home');
// });

// Route::get('/signup', function(){
//     return view('signup');
// });

// Route::get('/login', function(){
// // $login = ['Service 1', 'Service 2', 'Service 3', 'Service 4']
//     return view('login');
// });


//for layout
// Route::view('/layout', 'layout');

Route::view('/myhome1', 'home');
Route::view('/signup', 'signup');
Route::view('/login', 'login');


// Route::view('/vert', 'verticalnav');

Route::view('/dashboard', 'verticalnav1.dashboard');
Route::view('/books', 'verticalnav1.books');
Route::view('/authors', 'verticalnav1.authors');
Route::view('/about', 'verticalnav1.about');
Route::view('/magazines', 'verticalnav1.magazines');
Route::view('/newspapers', 'verticalnav1.newspaper');

Route::view('/firstview', 'firstview');

Route::get('/foo', [SignupController::class, 'index'])->name('foo');
Route::get('/dashboard', function(){
    return view('verticalnav1.dashboard');
});


// Route::resource('course', 'CourseController');
// Route::resource('books', 'BooksController');



Route::get('/books', [BooksController::class, 'index']);
Route::get('/authors', [AuthorsController::class, 'index']);
Route::get('/magazines', [MagazineController::class, 'index']);
Route::get('/newspapers', [NewspaperController::class, 'index']);

