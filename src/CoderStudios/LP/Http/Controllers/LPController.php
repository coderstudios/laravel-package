<?php

namespace App\Http\Controllers\CoderStudios;

use App\Http\Controllers\Controller;

class LPController extends Controller
{
	public function lp()
	{
        	$vars = [];
        	return view('vendor.lp.lp', compact('vars'))->render();
	}
}