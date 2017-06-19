<?php
namespace App\Http\Controllers;

class ApplicationController extends \Illuminate\Routing\Controller {

	/**
	 * @var \TYPO3Fluid\Fluid\View\ViewInterface
	 */
	protected $view;

	/**
	 * Execute an action on the controller.
	 *
	 * @param  string $method
	 * @param  array $parameters
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function callAction($method, $parameters) {


		/** @var \TYPO3Fluid\Fluid\View\TemplateView $view */
		$view = resolve(\TYPO3Fluid\Fluid\View\TemplateView::class);
		$controller = str_replace('Controller', '', (new \ReflectionClass($this))->getShortName());
		$context = $view->getRenderingContext();

		$viewHelperResolver = app(\App\ViewHelperResolver::class);

		$context->setViewHelperResolver($viewHelperResolver);

//		dd($context);

		$context->setControllerAction($method);
		$context->setControllerName($controller);
		$view->setRenderingContext($context);
		$this->view = $view;

		$result = parent::callAction($method, $parameters);
		if($result === null) {
			$result = $this->view->render();
		}

		return $result;
	}
}