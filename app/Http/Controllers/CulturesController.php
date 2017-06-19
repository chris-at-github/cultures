<?php
namespace App\Http\Controllers;

class CulturesController extends ApplicationController {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index() {
		$this->view->assign('test', 123);
	}
}