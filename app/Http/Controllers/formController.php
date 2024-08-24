<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function forms(){
        return view('catagory.form');
    }
    public function post(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'city' => 'required',
        ]);
        return $request->all();
    }
}
