<?php

namespace CoderStudios\LP\Composers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class MasterComposer {

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

	public function compose(View $view)
	{
        $view->with('title','LP Package');
	}
}