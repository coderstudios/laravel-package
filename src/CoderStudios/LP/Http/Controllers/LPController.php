<?php

namespace App\Http\Controllers;

class LPController extends Controller
{
	public function lp()
	{
        	$vars = [];
        	return view('lp', compact('vars'))->render();
	}
}