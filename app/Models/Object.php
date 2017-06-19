<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Object extends Model {

	/**
	 * @var string
	 */
	protected $table = 'objects';

	/**
	 * @var array
	 */
	protected $fillable = ['uuid', 'namespace', 'properties'];

	/**
	 * @param string $uuid
	 * @return \App\Models\Object
	 */
	public function findByUuid($uuid) {
		return \App\Models\Object::where('uuid', $uuid)->first();
	}
}