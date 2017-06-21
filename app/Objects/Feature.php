<?php
namespace App\Objects;

class Feature extends Object {

	/**
	 * @var array
	 */
	protected $fillable = ['name', 'version'];

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var float
	 */
	protected $version = 0.0;

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return \App\Objects\Feature
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * @param float $version
	 * @return \App\Objects\Feature
	 */
	public function setVersion($version) {
		$this->version = $version;

		return $this;
	}
}