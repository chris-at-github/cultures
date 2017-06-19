<?php
namespace Tests\Unit\Models;

use Tests\TestCase;

class ObjectTest extends TestCase {

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
	public function testInstance() {
		$this->assertInstanceOf(\App\Models\Object::class, app(\App\Models\Object::class));
	}

	/**
	 * @return void
	 */
	public function testStore() {
		$json = [
			'a' => 1,
			'b' => 2,
			'c' => 3
		];

		$model = app(\App\Models\Object::class);
		$model->fill([
			'uuid' => \Ramsey\Uuid\Uuid::uuid4(),
			'namespace' => \App\Objects\Object::class,
			'properties' => json_encode($json)
		]);

		$this->assertTrue($model->save());
	}

	/**
	 * @return void
	 */
	public function testGetFirst() {
		$uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();

		$json = [
			'd' => 4,
			'e' => 5,
			'f' => 6
		];

		// Save test data
		$insert = app(\App\Models\Object::class);
		$insert->fill([
			'uuid' => $uuid,
			'namespace' => \App\Objects\Object::class,
			'properties' => json_encode($json)
		]);

		$insert->save();

		// Load the data again
		$get = app(\App\Models\Object::class)::find(1);

		$this->assertInstanceOf(\App\Models\Object::class, $get);
		$this->assertEquals($uuid, $get->uuid);
		$this->assertEquals(\App\Objects\Object::class, $get->namespace);
		$this->assertEquals($json, json_decode($get->properties, true));
	}

	/**
	 * @return void
	 */
	public function testGetByUuid() {
		$uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();

		// Save test data
		$insert = app(\App\Models\Object::class);
		$insert->fill([
			'uuid' => $uuid,
			'namespace' => \App\Objects\Object::class,
			'properties' => json_encode([
				'g' => 7,
				'h' => 8,
				'i' => 9
			])
		]);

		$insert->save();

		// Load the data again
		$get = app(\App\Models\Object::class)->findByUuid($uuid);
		$this->assertInstanceOf(\App\Models\Object::class, $get);
	}
}
