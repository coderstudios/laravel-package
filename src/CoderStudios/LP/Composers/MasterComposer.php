<?php

namespace CoderStudios\LP\Composers;

use Illuminate\Contracts\View\View;

class MasterComposer {

	public function compose(View $view)
	{
		$view->with('title','LP Package');
	}
}