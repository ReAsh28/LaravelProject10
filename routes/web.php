<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AhmedController;
use App\Http\Controllers\ProductController;
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

//General Route

Route::get('/', function () {
    return view('welcome');
});


//General Route

Route::get('/test', function () {
    return '<h1>welcome</h1>';
});


//Different Signature of Routing Using Automatic View Keyword

Route::view('/users','Index');


//Different Signature of Routing Using Automatic View Keyword + Send Data to View

Route::view('/testers', 'Index', ['name' => 'Mohamed']);


// Route With ParamS in URL

Route::get('/users/{id}', function (int $id){
     return 'User '.$id;
});


// Another Shape of Route (Long Route) + Send Multiple Params in URL

Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId){
    return 'Post id '.$postId. ' Comment id '.$commentId;
});


// Using Default value for Params if User not Enter it 

Route::get('/user/{name?}', function (string $name= 'John'){
    return $name;
});


// Use Redirect() Method to Redirect to Named Route

Route::get('/mohamed', function () {
    return redirect()-> route('essa');
});

// Named Route

Route::get('/user/admin/essa', function(){
    return '<h1>Essa</h1>';
})->name('essa');


// Route to multiple Views Has Same Name but at Different Folders + Send Data to View

Route::get('admin/panel', function(){
    return view('admin.index', ['name'=> 'Welcome Admin']);
});


// Route to multiple Views Has Same Name but at Different Folders + Send Data to View .... But With Different Signature of Route

Route::view('/tester/panel', 'tester.index', ['name'=> 'Welcome our tester']);


//Moving to The First Available View

Route::get('/post/panel', function (){
    return View::first(['admin.create', 'admin.index'], ['name'=> 'Welcome our Admin']);
});


//Passing Multiple Data to View 

Route::get('/create/tester', function(){
    return view('tester.create')
           ->with('name1', '')
           ->with('name2', 'Ali')
           ->with('name', '<h1>Mai</h1>');
});



//////////////////////////////////////////// Routing Using Controllers  /////////////////////////////////////////////////////

Route::get('/ahmed/user/Index', [AhmedController::class, 'Index']);
Route::get('/ahmed/user/Create', [AhmedController::class, 'Create']);
Route::get('/ahmed/user/Edit', [AhmedController::class, 'Edit']);
Route::get('/ahmed/user/Delete', [AhmedController::class, 'Delete']);


Route::resource('products', ProductController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\ProductController::class, 'index']);

Route::view('/api','CallingAPI');
