<?php
namespace App\Managers;

class ObjectManager {

	/**
	 * @param \App\Objects\Object $object
	 * @return \App\Objects\Object $object
	 */
	public function store(\App\Objects\Object $object) {

		if($object->getExist() === false) {

			// Generate a uuid for new objects
			$object->setUuid(\Ramsey\Uuid\Uuid::uuid4());

			// Generate a new model for this object
			$model = app(\App\Models\Object::class);
		} else {

			// Load existing object model from database
			$model = app(\App\Models\Object::class)->findByUuid($object->getUuid());
		}

		// todo: transform object properties to json string and store them to the properties attribute of object model

		// todo: set the exist property to true, if a new object model stored successfully to the database

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