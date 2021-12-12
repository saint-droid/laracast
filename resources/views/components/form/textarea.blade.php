@props(['name'])
<div class="mb-6">
        <x-form.label name="{{$name}}"/>
        <textarea name="{{$name}}" id="{{$name}}"  rows="8" class="w-full p-4 text-sm focus:ring border border-gray-200" placeholder="Write your post excerpt." required>
        {{$slot ?? old($name)}}
        </textarea>
        <x-form.error name="{{$name}}"/>

    </div>