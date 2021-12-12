<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larablog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="app.css">

        <!-- Styles -->
        
             
    </head>
    <body >
       @yield('content')
    </body>
</html>
<!-- @extends('welcome')
@section('content')
        @foreach($posts as $post)
            <article>
                <h1> <a href="/post/{{$post->slug}}">{{$post->title}}</a> </h1>
                By  <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a>  in <a href="/categories/{{$post->category->slug}}">{{ $post->category-> name}}</a>

                <p>
                 {{$post->excerpt}}                
                </p>
            </article>
        @endforeach 
        
@endsection -->