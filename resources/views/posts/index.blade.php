<x-layout >
<x-slot name="content">

        @include('posts.header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if($posts->count())
        
            <x-posts-grid :posts="$posts"/>
            @else
            <p class="text-center">No post available!</p>
            @endif
        </main>

</x-slot>
</x-layout>