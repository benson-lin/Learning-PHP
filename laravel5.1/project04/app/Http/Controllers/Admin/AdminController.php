<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{


	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

    public function store(Request $request)
    {
        $name = $request->input('name');

        //
    }
}