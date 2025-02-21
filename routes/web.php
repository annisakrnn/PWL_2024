<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('photos', PhotoController::class); 

Route::get('/a', function () {
    return view('welcome');
});

//praktikum 1 no.1
// Route::get('/hello', function(){
//     return 'Hello World';
// });

//praktikum 1 no.2
Route::get('/world', function(){
    return 'World';
});

//praktikum 1 no.3
Route::get('/', function(){
    return 'Selamat Datang';
});

//praktikum 1 no.4
//Route::get('/about', function(){
  //  return '2341720070 , Annisa Kurniawati';
//});

//praktikum 1 no.5
Route::get('/user/{nama}', function($name){
    return 'Nama Saya: ' .$name;
});

//praktikum 1 no.6
Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Pos ke-' .$postId." Komentar ke-: ".$commentId;
});

//praktikum 1 no.7
// Route::get('/articles/{id}', function($id){
//     return 'Halaman Artikel dengan ID: ' .$id;
// });

//praktikum 1 no.8
Route::get('/user/{name?}', function($name=null){
    return 'Nama saya' .$name;
});

//praktikum 1 no.9
Route::get('/user/{name?}', function($name='John'){
    return 'Nama saya : ' .$name;
});

//praktikum 1 no.10
Route::get('/user/profile', function(){
    //
})->name('profile');

//praktikum 1 no.11
Route::get ('/hello', [WelcomeController::class,'hello']);

//praktikum 1 no.12
Route::get ('/index', [PageController::class,'index']);
//praktikum 1 no.12
Route::get ('/about', action: [PageController::class,'about']);
//praktikum 1 no.12
Route::get ('/articles/{id}', [PageController::class,'articles']);

//praktikum 1 no.13
Route::get ('/index', [HomeController::class,'index']);
//praktikum 1 no.13
Route::get ('/about', [AboutController::class,'about']);
//praktikum 1 no.13
Route::get ('/articles/{id}', [ArticleController::class,'articles']);

//no.14:soalnya adalah menampilan tabel (php artisan list)

//praktikum 1 no.15
// Route::get('/greeting', function () { 
//     return view('hello', ['name' => 'Annisa']); 
//     });

//praktikum 1 no.16
// Route::get('/greeting', function () { 
//     return view('blog.hello', ['name' => 'Annisa']); 
//     }); 

//praktikum 1 no.17
Route::get('/greeting', [WelcomeController::class, 
'greeting']);


//praktikum 1 no.9
// Route::resource('photos', PhotoController::class)->only([ 
//     'index', 'show' 
//     ]); 

//praktikum 1 no.10
// Route::resource('photos', PhotoController::class)->except([ 
//         'create', 'store', 'update', 'destroy' 
//         ]);




