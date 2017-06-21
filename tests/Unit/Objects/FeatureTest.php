<?php
namespace Tests\Unit\Objects;

use Tests\TestCase;

class FeatureTest extends TestCase {

	/**
	 * @return void
	 */
	public function testInstance() {
		$this->assertInstanceOf(\App\Objects\Feature::class, app(\App\Objects\Feature::class));
	}

	/**
	 * @return void
	 */
	public function testFillable() {

		/* @var \App\Objects\Feature $object */
		$object = app(\App\Objects\Feature::class);
		$object->fill([
			'name' => 'Feature',
			'version' => 0.1
		]);

		$this->assertEquals('Feature', $object->getName());
		$this->assertEquals(0.1, $object->getVersion());
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
