<?php
namespace App;

/**
 * Class ViewHelperResolver.
 */
class ViewHelperResolver extends \Diego\Fluid\ViewHelperResolver {
	/**
	 * ViewHelperResolver constructor.
	 */
	public function __construct() {
		parent::__construct();
		$this->addNamespace('c', 'App\\ViewHelpers');
	}

	/**
	 * @param string $namespaceIdentifier
	 * @param string $methodIdentifier
	 * @return NULL|string
	 */
//	public function resolveViewHelperClassName($namespaceIdentifier, $methodIdentifier) {
//		try {
//			return parent::resolveViewHelperClassName($namespaceIdentifier, $methodIdentifier);
//		} catch(\TYPO3Fluid\Fluid\Core\Parser\Exception $exception) {
//			if($namespaceIdentifier !== 'f') {
//				throw $exception;
//			}
//
//			return parent::resolveViewHelperClassName('_f', $methodIdentifier);
//		}
//	}
}
