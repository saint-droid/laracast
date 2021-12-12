<x-layout>

<x-setting :heading="'Edit Posts:' .$post->title">
<!-- This example requires Tailwind CSS v2.0+ -->
<form action="/admin/posts/{{$post->slug}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <x-form.input name="title" :value="old('title', $post->title)"/>
    <x-form.input name="slug" :value="old('slug', $post->slug)"/>
    <div class="flex mt-6">
    <div class="flex-1">
    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)"/>
    </div>
    <img src="{{asset('storage/' . $post->thumbnail)}}" alt="" class="rounded-xl ml-6" width="100">
    </div>
    <x-form.textarea name="excerpt" >{{old('excerpt', $post->excerpt)}}</x-form.textarea>
    <x-form.textarea name="body">{{old('body', $post->body)}}</x-form.textarea>




    
    
    
    
    
    <div class="mb-6">
    <x-form.label name="category"/>
        <select name="category_id" id="category_id" class="w-full p-3 border border-gray-200">
            @php

            $categories = App\Models\Category::all();
            @endphp

            @foreach($categories as $category)
            <option
             value="{{$category->id}}" 
             {{old('category_id', $post->category_id) ==$category->id ? 'selected':''}} 
             >{{ucwords($category->name)}}
            </option>
            @endforeach
        </select>       
    </div>
    <div class="mb-6">
    <button type="submit" class="bg-blue-500 text-white uppercase font-semi-bold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600 ">Update</button>
    </div>
    @if($errors->any())
        <ul>
        @foreach ($errors->all() as $error)

        <li class="text-red-500 text-xs">{{$error}}</li>
        @endforeach
        </ul>
    @endif
</form>

</x-setting>


</x-layout>
