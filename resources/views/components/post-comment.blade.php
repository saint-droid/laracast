@props(['comment'])

<article class="flex bg-gray-100 p-6 rounded-xl border-gray-300 space-x-4 " >
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/50?id={{$comment->user_id}}" alt="avatar" width="50" height="50" class="rounded-xl">
    </div>
    <div class="">
        <header class="mb-4">
            <h3 class="font-bold">{{$comment->author->username}}</h3>
            <p class="text-xs">Posted <time>{{$comment->created_at->diffForHumans()}}</time></p> </p>
        </header>
        <p> {{$comment->body}} </p>
    </div>
    

</article>