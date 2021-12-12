<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect()-> back()->with('success' , 'You have successfully logged out ');

    }
    public function create()
    {
        return view('sessions.create');

    }
    public function store()
    {

        $attributes= request()->validate([
            
            'email' => 'required|email',
            'password' => 'required|min:8|max:255',
          ]);

          if(auth()->attempt($attributes)){
              session()->regenerate();
            return redirect('/')->with('success' , 'You have successfully logged in!');

          }
          return back()->withInput()->withErrors(['email'=>'Sorry, provided creditials were not approved']);

  

    }
}
