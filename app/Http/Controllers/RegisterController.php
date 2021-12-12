<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {

       $attributes= request()->validate([
          'name' => 'required|max:255|min:4',
          'username' => 'required|max:255|min:5|unique:users,username',
          'email' => 'required|email|max:255|unique:users,email',
          'password' => 'required|min:8|max:255',
        ]);

        $attributes['password']= bcrypt($attributes['password']);
        $user = User::create($attributes);

        ///log in
        auth()->login($user);

        // session()->flash('success' , 'You have successfully created an account');
        return redirect('/')->with('success' , 'You have successfully created an account');
    }

}
