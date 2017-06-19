<?php
namespace App\ViewHelpers\Json;

/**
 * Class DecodeViewHelper.
 */
class DecodeViewHelper extends \TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * @return void
	 */
	public function initializeArguments() {
		parent::initializeArguments();
		$this->registerArgument('json', 'string', 'Json String', true);
		$this->registerArgument('assoc', 'boolean', 'Assoc', false, true);
	}

	/**
	 * @return array|boolean
	 */
	public function render() {
		return json_decode($this->arguments['json'], $this->arguments['assoc']);
	}
}
