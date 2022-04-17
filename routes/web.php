<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AllbooksController;
use App\Http\Controllers\AllauthorsController;
use App\Http\Controllers\AllmagazinesController;
use App\Http\Controllers\AllnewspapersController;
use App\Http\Controllers\LoginController;





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
// Route::view('/login', 'login');


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



// Route::get('/books', [BooksController::class, 'index']);
// Route::get('/authors', [AuthorsController::class, 'index']);
// Route::get('/magazines', [MagazineController::class, 'index']);
// Route::get('/newspapers', [NewspaperController::class, 'index']);

Route::post("login", [loginController::class, 'getData']);
Route::view('login', 'login');

Route::get("signup", [SignupController::class, 'getData']);
Route::view('signup', 'signup');

// Route::get('/login', function () {
//     if (session()->has('user')) {
//         return redirect('profile');
//     }
//     return view('user-form',["title"=>"Login"]);
// });
// Route::post('/login', [LoginController::class, "login"]); 

/*-------------------------------------------------------------------------------------------------*/

Route::get('/books', [AllbooksController::class, 'getAllbook'])->name('book.getAllbook');
Route::get('/add-book', [AllbooksController::class, 'addBook']);
Route::post('/add-book', [AllbooksController::class, 'addBookSubmit']); 
//Route::post('/add-book', [AllbooksController::class, 'addBookSubmit'])->name('book.addsubmit'); 

//edit function
Route::get('/edit-book/{S_No}', [AllbooksController::class, 'getBookByS_No'])->name('book.edit');
// Route::post('/edit-book/{S_No}', [AllbooksController::class, 'getBookByS_No_POST'])->name('book.edit');

Route::post('/update-book', [AllbooksController::class, 'UpdateBook'])->name('book.update');

//delete function
Route::get('/delete-book/{S_No}', [AllbooksController::class, 'deleteBook'])->name('book.delete');


/*-------------------------------------------------------------------------------------------------*/

Route::get('/authors', [AllauthorsController::class, 'getAllauthor'])->name('author.getAllauthor');
Route::get('/add-author', [AllauthorsController::class, 'addAuthor']);
Route::post('/add-author', [AllauthorsController::class, 'addAuthorSubmit']); 

//edit function
Route::get('/edit-author/{S_No}', [AllauthorsController::class, 'getAuthorsByS_No'])->name('author.edit');
// Route::post('/edit-book/{S_No}', [AllbooksController::class, 'getBookByS_No_POST'])->name('book.edit');

Route::post('/update-author', [AllauthorsController::class, 'UpdateAuthor'])->name('Author.update');

//delete
Route::get('/delete-Author/{S_No}', [AllauthorsController::class, 'deleteAuthor'])->name('Author.delete');


 /*-------------------------------------------------------------------------------------------------*/


Route::get('/magazines', [AllmagazinesController::class, 'getAllmagazine'])->name('magazine.getAllmagazine');
Route::get('/add-magazines', [AllmagazinesController::class, 'addMagazine']);
Route::post('/add-magazines', [AllmagazinesController::class, 'addMagazineSubmit']); 


//edit function
Route::get('/edit-magazines/{S_No}', [AllmagazinesController::class, 'getMagazinesByS_No'])->name('Magazine.edit');
Route::post('/update-magazines', [AllmagazinesController::class, 'UpdateMagazine'])->name('Magazine.update');


//delete function
Route::get('/delete-magazines/{S_No}', [AllmagazinesController::class, 'deleteMagazines'])->name('Magazine.delete');

/*-------------------------------------------------------------------------------------------------*/

Route::get('/newspapers', [AllnewspapersController::class, 'getAllNewspaper'])->name('newspaper.getAllnewspaper');
// Route::get('/add-newspapers', [AllnewspapersController::class, 'addNewspaper']);
// Route::post('/add-newspapers', [AllnewspapersController::class, 'addNewspaperSubmit']);


// //edit function
// Route::get('/edit-newspaer/{S_No}', [AllnewspapersController::class, 'getNewspaperByS_No'])->name('Newspaper.edit');
// Route::post('/update-newspaper', [AllnewspapersController::class, 'UpdateNewspaper'])->name('Newspaper.update');



/*-------------------------------------------------------------------------------------------------*/








