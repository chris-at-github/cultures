<?php
namespace App\Objects;

class Object {

	/**
	 * @var string $uid
	 */
	protected $uuid = null;

	/**
	 * @var string $name
	 */
	protected $name;

	/**
	 * @var array
	 */
	protected $fillable = ['name'];

	/**
	 * @var boolean
	 */
	protected $exist = false;

	/**
	 * @return string
	 */
	public function getUuid() {
		return $this->uuid;
	}

	/**
	 * @param string $uuid
	 * @return \App\Objects\Object
	 */
	public function setUuid(string $uuid) {
		$this->uuid = $uuid;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getNamespace() {
		return get_class($this);
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return \App\Objects\Object
	 */
	public function setName(string $name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * @param array
	 * @return \App\Objects\Object
	 */
	public function fill($properties) {
		foreach($properties as $name => $property) {
			if(in_array($name, $this->fillable) === true) {
				$method = 'set' . \Illuminate\Support\Str::studly($name);

				if(method_exists($this, $method) === true) {
					$this->{$method}($property);
				}
			}
		}

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getExist() {
		return $this->exist;
	}

	/**
	 * @param boolean $exist
	 */
	public function setExist($exist) {
		$this->exist = $exist;
	}
}