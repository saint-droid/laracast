<x-layout>
<x-slot name="content">
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border-gray-200">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="post" class="mt-10">
                @csrf
            <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700"> Name</label>
                    <input name="name" class=" border border-gray-400 p-2 w-full" type="text"  id="name" required value="{{old('name')}}">
                    @error('name')
                    <p class="text-red-500 text-xs mt-1"> {{$message}}</p>


                    @enderror
                </div>
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700"> Username</label>
                    <input name="username" class=" border border-gray-400 p-2 w-full" type="text"  id="username" required value="{{old('username')}}">
                    @error('username')
                    <p class="text-red-500 text-xs mt-1"> {{$message}}</p>


                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700"> Email</label>
                    <input name="email" class=" border border-gray-400 p-2 w-full" type="email"  id="email" required value="{{old('email')}}">
                    @error('email')
                    <p class="text-red-500 text-xs mt-1"> {{$message}}</p>


                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700"> Password</label>
                    <input name="password" class=" border border-gray-400 p-2 w-full" type="password"  id="password" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1"> {{$message}}</p>


                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Register</button>
                </div>
                @if($errors->any())
                <ul>
                @foreach ($errors->all() as $error)

                <li class="text-red-500 text-xs">{{$error}}</li>
                @endforeach
                </ul>
                @endif
            </form>
        </main>

    </section>
</x-slot>

</x-layout>