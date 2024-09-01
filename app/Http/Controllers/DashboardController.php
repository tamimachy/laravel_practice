<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        dd($user);
        return view('auth.dashboard',compact('user'));
    }
}
