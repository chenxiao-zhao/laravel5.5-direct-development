<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Oct 2018 11:36:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ZonePolygonMap
 * 
 * @property int $zone_id
 * @property int $polygon_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * 
 * @property \App\Models\VmPolygonspec $vm_polygonspec
 * @property \App\Models\Zone $zone
 *
 * @package App\Models
 */
class ZonePolygonMap extends Eloquent
{
	protected $table = 'zone_polygon_map';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'zone_id' => 'int',
		'polygon_id' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'create_time',
		'update_time',
		'status_id'
	];

	public function vm_polygonspec()
	{
		return $this->belongsTo(\App\Models\VmPolygonspec::class, 'polygon_id');
	}

	public function zone()
	{
		return $this->belongsTo(\App\Models\Zone::class);
	}
}
