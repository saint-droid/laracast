<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class PostController extends Controller
{
    public function index()
    {
        
            // return Post::latest()->filter(request(['search', 'category','author']))->get();
    return view('posts.index', [
        'posts' => Post::latest()->filter(request(['search', 'category','author']))->Paginate()->withQueryString(),

    ]);
    }

    public function show( Post $post){
        
        return view('posts.show', [
            'post'=> $post,
    
        ]); 
    }
    public function getPosts(){
       return Post::latest()->filter()->get();
    }


    public function create(){

       
      return  view('admin.posts.create');
    }
    public function store(){

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('posts','slug')],
            'excerpt'=>'required',
            'body'=>'required',
            'category_id'=>['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] =auth()->id();
        $attributes['thumbnail'] =request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/');
}
}
