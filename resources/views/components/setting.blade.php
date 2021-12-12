@props(['heading'])

<x-slot name="content">
    <section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-xl font-bold mb-4 text mb-8 pb-2 border-b">{{ucwords($heading)}}</h1>
    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-bold mb-2">Links</h4>
            <ul>
                <li>
                    <a href="/admin/posts" class="{{ request()->is('/admin/dashboard') ? 'text-blue-500' : ''}} ">All posts</a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('/admin/posts/create') ? 'text-blue-500' : ''}} ">New post</a>
                </li>
            </ul>
            <h4 class="font-bold mb-2 mt-4">Available categories</h4>
            <ul>
                @php
                $category = App\Models\Category::all();

                @endphp
                
                @foreach($category as $category)
                <li>
                    <a href="/?categories={{$category->slug}}" >{{$category->name}}</a>
                </li>
                @endforeach
            </ul>
        </aside>
        <main class="flex-1">
            <div class="border border-gray-200 p-6 rounded-xl ">
            {{$slot}}
            </div>
        </main>
    </div>
    

</section>
</x-slot>