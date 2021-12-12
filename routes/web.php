<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminPostController;

use App\Services\Newsletter;
use \Illuminate\Validation\ValidationException;
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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/post/{post:slug}', [PostController::class, 'show']);


// Route::get('categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'posts'=> $category->posts,
//         'currentCategory'=>$category,
//         'categories' =>Category::all(),
//     ]); 
// });
Route::get('authors/{author:username}', function (User $author) {
    return view('posts.index', [
        'posts'=> $author->posts,

    ]); 
})->name('category');


Route::get('/register',[RegisterController::class, 'create'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store'])->middleware('guest');

//logout
Route::post('/logout',[SessionController::class, 'destroy'])->middleware('auth');

//login
Route::get('/login',[SessionController::class, 'create'])->middleware('guest');
Route::post('/sessions',[SessionController::class, 'store'])->middleware('guest');

///commments
Route::post('posts/{post:slug}/comments',[CommentController::class, 'store']);


Route::post('newsletter',  function(Newsletter $newsletter){

    request()->validate(['email'=>'required|email']);

   
    try{

        // $newsletter= new Newsletter();

        $newsletter->subscribe(request('email'));
     }catch(\Exception $e){
            throw ValidationException::withMessages([
            'email'=>'This email could not be added!'
        ]);

    }
    return redirect('/')->with('success', 'You are now signed up to our newsletter' );


    });

Route::get('admin/posts/create', [PostController::class, 'create'])->middleware('admin');
Route::post('admin/posts', [PostController::class, 'store'])->middleware('admin');

//admin
Route::get('/admin/posts', [AdminPostController::class, 'index'])->middleware('admin');
Route::get('/admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin');
Route::patch('/admin/posts/{post:slug}', [AdminPostController::class, 'update'])->middleware('admin');
Route::delete('/admin/posts/{post:slug}', [AdminPostController::class, 'destroy'])->middleware('admin');

