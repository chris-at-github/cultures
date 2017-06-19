<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('objects', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid');
			$table->string('namespace', 255);
			$table->text('properties');

			$table->unique('uuid');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('objects');
	}
}
