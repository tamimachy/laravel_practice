<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }

    public function registerAuth(Request $request){
        $request->validate(
            [
                'name' => 'required|',
                'email' => 'required|email',
                'password' => 'required'
            ]
        );
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
        ]);

        if($user){
            return redirect()->route('login');
        }
        return redirect('register')->withError('Error')->with('error',"Failed to Register User");
    }
    public function loginAuth(Request $request){
       $creditials = [
        'email' => $request->email,
        'password' => $request->password,
       ];

       if(Auth::attempt($creditials)){
        return redirect()->route('dashboard');
       }
       return redirect()->route('login')->with('error',"Invalid Credentials");
    }
}
