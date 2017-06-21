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
	public function testUnfillable() {
		$object = app(\App\Objects\Object::class);
		$object->fill([
			'uuid' => \Ramsey\Uuid\Uuid::uuid4(),
//			'name' => 'Object'
		]);

//		$this->assertEquals('Object', $object->getName());
		$this->assertNotEquals(true, \Ramsey\Uuid\Uuid::isValid($object->getUuid()));
	}

	/**
	 * @return void
	 */
	public function testExist() {
		$object = app(\App\Objects\Object::class);

		$this->assertFalse($object->getExist());
	}

//	/**
//	 * @return void
//	 */
//	public function testSerializable() {
//
//		/* @var \App\Objects\Object $object */
//		$object = app(\App\Objects\Object::class);
//
//		$this->assertEquals(null, $object->getSerializable());
//
//		$object->setSerializable(['name']);
//		$this->assertCount(1, $object->getSerializable());
//		$this->assertContains('name', $object->getSerializable());
//	}

//	/**
//	 * @return void
//	 */
//	public function testToArray() {
//
//		/* @var \App\Objects\Object $object */
//		$object = app(\App\Objects\Object::class);
//		$data = [
//			'name' => 'Object'
//		];
//
//		$object->fill($data);
//
//		$this->assertArrayHasKey('name', $object->toArray());
//		$this->assertEquals($data, $object->toArray());
//	}
}
