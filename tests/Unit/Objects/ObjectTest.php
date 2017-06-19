<?php
namespace Tests\Unit\Objects;

use Tests\TestCase;

class ObjectTest extends TestCase {

	/**
	 * @return void
	 */
	public function testInstance() {
		$this->assertInstanceOf(\App\Objects\Object::class, app(\App\Objects\Object::class));
	}

	/**
	 * @return void
	 */
	public function testSetUuid() {
		$object = app(\App\Objects\Object::class);
		$return = $object->setUuid(\Ramsey\Uuid\Uuid::uuid4());

		$this->assertInstanceOf(\App\Objects\Object::class, $return);
	}

	/**
	 * @return void
	 */
	public function testGetUuid() {
		$object = app(\App\Objects\Object::class);
		$object->setUuid(\Ramsey\Uuid\Uuid::uuid4());

		$this->assertTrue(\Ramsey\Uuid\Uuid::isValid($object->getUuid()));
	}

	/**
	 * @return void
	 */
	public function testFillable() {
		$object = app(\App\Objects\Object::class);
		$object->fill([
			'uuid' => \Ramsey\Uuid\Uuid::uuid4(),
			'name' => 'Object'
		]);

		$this->assertEquals('Object', $object->getName());
		$this->assertNotEquals(true, \Ramsey\Uuid\Uuid::isValid($object->getUuid()));
	}
}
