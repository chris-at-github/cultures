<?php
namespace Tests\Unit\Models;

use Tests\TestCase;

class ObjectManagerTest extends TestCase {

	/**
	 * @return void
	 */
	protected function setUp() {
		parent::setUp();

		// clear objects
		\Illuminate\Support\Facades\DB::table('objects')->truncate();
	}

	/**
	 * @return void
	 */
	public function testStore() {

		/* @var \App\Managers\ObjectManager $manager */
		$manager = app(\App\Managers\ObjectManager::class);

		/* @var \App\Objects\Object $object */
		$object = app(\App\Objects\Object::class);

		// Store object to database
		$return = $manager->store($object);

		// Store method always return an object \App\Objects\Object
		$this->assertInstanceOf(\App\Objects\Object::class, $return);
	}
}
