<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index(){

        // 3 types of passing data Controllers to veiws --> compact, with functions and array data
        
        $data['catagory'] =['Wordpress','Google','Facebook','Twitter'];
        $data['topics'] =['variable','php','Constant','javascript'];
        // $course = "MS Office";
        // return view('catagory.index',compact('course'));
        // return view('catagory.index')->with('emp1','MS Word');
        return view('catagory.index',$data);
    }
    public function main(){
        return view('layouts.test');
    }
    
}
