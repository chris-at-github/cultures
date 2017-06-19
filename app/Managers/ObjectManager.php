<?php
namespace App\Managers;

class ObjectManager {

	/**
	 * @param \App\Objects\Object $object
	 * @return \App\Objects\Object $object
	 */
	public function store(\App\Objects\Object $object) {
		return $object;
	}

	/**
	 * @param string $uuid
	 * @return \App\Objects\Object $object
	 */
	public function get($uuid) {
		return app(\App\Objects\Object::class);
	}

	/**
	 * @param array $options
	 * @return \Illuminate\Support\Collection
	 */
	public function find($options) {
		return app(\Illuminate\Support\Collection::class);
	}
}