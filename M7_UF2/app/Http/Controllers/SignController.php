<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    //Pràctica 1 UF2
    // public function signin($param1,$param2,$param3,$param4){
    //     $result = '';
    //     $result .= $param1 ." ". $param2." ". $param3." ". $param4;
    //     return view('signin')->with('textFinal',$result);
    // }

    // public function signup($param1,$param2,$param3){
    //     $result = '';
    //     $result .= $param1 ." ". $param2." ". $param3;
    //     return view('signup')->with('textFinal',$result);
    // }


    //Teoria 1.Laravel
    public function signin2(){
        return view('signin');
    }

    public function signup2(){
        return view('signup');
    }


    //Teoria 1.Laravel_UF2 mètode POST
    public function products(Request $request){
        $text = $request['product'];
        return view('products')->with(['result'=> $text]);
    }
    

    

}
