<?php

namespace App\Http\Controllers;



use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }

    public function create(){
        return view('sessions.create');
    }

    public function store(){
        $attributes=request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(auth()->attempt($attributes)){
//            auth()->regenerate();
            return redirect('/')->with('success', 'Welcome back!');
        }

        throw ValidationException::withMessages(["email"=>'Your crediential could not be verified']);
    }
}
