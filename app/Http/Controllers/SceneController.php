<?php
namespace App\Http\Controllers;

class SceneController extends ApplicationController {

	/**
	 * @return void
	 */
	public function index() {
		$this->view->assign('settings', config('cultures'));
		$this->view->assign('scene', config('scene.dada57d4-ac8b-4b74-ac70-538046fff862'));
	}
}