<x-layout>

<x-setting heading="publish new Post">
<form action="/admin/posts" method="post" enctype="multipart/form-data">
    @csrf

    <x-form.input name="title"/>
    <x-form.input name="slug"/>
    <x-form.input name="thumbnail" type="file"/>
    <x-form.textarea name="excerpt"/>
    <x-form.textarea name="body"/>




    
    
    
    
    
    <div class="mb-6">
    <x-form.label name="category"/>
        <select name="category_id" id="category_id" class="w-full p-3 border border-gray-200">
            @php

            $categories = App\Models\Category::all();
            @endphp

            @foreach($categories as $category)
            <option
             value="{{$category->id}}" 
             {{old('category_id') ==$category->id ? 'selected':''}} 
             >{{ucwords($category->name)}}
            </option>
            @endforeach
        </select>       
    </div>
    <div class="mb-6">
    <button type="submit" class="bg-blue-500 text-white uppercase font-semi-bold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600 ">Publish</button>
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
