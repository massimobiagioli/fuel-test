<?php

namespace Dummy;

class Presenter_First extends \Presenter
{	
	public function view()
	{		
		\Log::info("First presenter fired");
		
		$result = \DB::query('SELECT * FROM `soggetti`')->execute();

		\Config::load('first', true);
		$this->kcfg = \Config::get('first.cfg1');
		$this->title = "By Presenter";
		$this->k1 = \Input::param('k1', 'v1');
		$this->soggetti = $result;
		// View composition
		$this->footer = \View::forge('footer', ['vtest' => \Mypackage\Myutil::calc(3, 4)]);
	}
}
