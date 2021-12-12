@props(['trigger'])

<div x-data="{show:false}" @click.away="show= false" class="relative p-4">
    <!-- {{--trigger--}} -->
    <div  @click="show=!show">
        {{$trigger}}
    </div>

    <!-- {{--dropdown--}} -->
    <div x-show="show" class="py-2 absolute  mt-2 bg-gray-100  w-full z-50 rounded-xl" style="display:none;">
   {{$slot}}
    </div>
</div>



                 