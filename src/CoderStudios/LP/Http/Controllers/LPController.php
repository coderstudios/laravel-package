<?php

namespace CoderStudios\LP\Http\Controllers;

use App\Http\Controllers\Controller;

class LPController extends Controller
{
	public function lp()
	{
        	$vars = [];
        	return view('vendor.lp.lp', compact('vars'))->render();
	}
}