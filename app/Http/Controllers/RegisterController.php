<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    
    }
    
    public function create()
    {
        return view('register.create');
    }

    public function store(RegisterRequest $request)
    {
        \Log::info($request);
        
        $user = New User;
    
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();
        
        auth()->login($user);

        session()->flash('message','Thank You for your registration!');
        
        return redirect('/');
    }


}
