<?php

namespace CoderStudios\LP\Http\Controllers;

use Illuminate\Routing\Controller;

class LPController extends Controller
{
	public function lp()
	{
        $vars = [];
        return view('lp', compact('vars'))->render();
	}
}