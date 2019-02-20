<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Queue
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property bool $enabled
 * @property string $type
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \Illuminate\Database\Eloquent\Collection $queue_polygon_maps
 *
 * @package App\Models
 */
class Queue extends Eloquent
{
	protected $table = 'queue';
	public $timestamps = false;

	protected $casts = [
		'enabled' => 'bool'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'name',
		'description',
		'enabled',
		'type',
		'create_time',
		'update_time'
	];

	public function queue_polygon_maps()
	{
		return $this->hasMany(\App\Models\QueuePolygonMap::class);
	}
}
