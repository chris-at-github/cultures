<?php
namespace App\ViewHelpers\Json;

/**
 * Class EncodeViewHelper.
 */
class EncodeViewHelper extends \TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * @var boolean
	 */
	protected $escapeChildren = false;

	/**
	 * @var boolean
	 */
	protected $escapeOutput = false;

	/**
	 * @return void
	 */
	public function initializeArguments() {
		parent::initializeArguments();
		$this->registerArgument('value', 'array', 'Array for to json', true);
	}

	/**
	 * @return string
	 */
	public function render() {
		return json_encode($this->arguments['value']);
	}
}
