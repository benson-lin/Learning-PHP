<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
  
    public function login(Request $request)
    {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(trim($username) == 'admin' 
            && trim($password) == 'admin'){
            $code=200;
            $request->session()->put('admin', $username);
            return response()->json(['code'=>$code]);
        }else{
            $code=500;
            return response()->json(['code'=>$code]);
        }
    }
}