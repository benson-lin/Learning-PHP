<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
// Illuminate\Routing\Controller已经包含在App\Http\Controllers中了

class AdminController extends BaseController
{


	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

    public function test()
    {
        // $name = $request->input('name');
        echo "111";
        //
    }
}