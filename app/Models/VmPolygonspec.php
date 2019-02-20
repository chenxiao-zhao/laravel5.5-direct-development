<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Oct 2018 11:36:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VmPolygonspec
 * 
 * @property int $id
 * @property string $name
 * @property int $camera_id
 * @property int $zone_id
 * @property string $specification
 * @property string $extra_parameter
 * @property bool $enabled
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmCamera $vm_camera
 * @property \Illuminate\Database\Eloquent\Collection $checkout_records
 * @property \Illuminate\Database\Eloquent\Collection $polygoncounting_records
 * @property \Illuminate\Database\Eloquent\Collection $queue_polygon_maps
 * @property \Illuminate\Database\Eloquent\Collection $zone_polygon_maps
 *
 * @package App\Models
 */
class VmPolygonspec extends Eloquent
{
	protected $table = 'vm_polygonspec';
	public $timestamps = false;

	protected $casts = [
		'camera_id' => 'int',
		'zone_id' => 'int',
		'enabled' => 'bool'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'name',
		'camera_id',
		'zone_id',
		'specification',
		'extra_parameter',
		'enabled',
		'create_time',
		'update_time'
	];

	public function vm_camera()
	{
		return $this->belongsTo(\App\Models\VmCamera::class, 'camera_id');
	}

	public function checkout_records()
	{
		return $this->hasMany(\App\Models\CheckoutRecord::class, 'polygon_id');
	}

	public function polygoncounting_records()
	{
		return $this->hasMany(\App\Models\PolygoncountingRecord::class, 'polygon_id');
	}

	public function queue_polygon_maps()
	{
		return $this->hasMany(\App\Models\QueuePolygonMap::class, 'polygon_id');
	}

	public function zone_polygon_maps()
	{
		return $this->hasMany(\App\Models\ZonePolygonMap::class, 'polygon_id');
	}
}
