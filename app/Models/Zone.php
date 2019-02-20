<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Oct 2018 11:36:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Zone
 * 
 * @property int $id
 * @property string $name
 * @property string $position
 * @property float $area
 * @property int $type_id
 * @property int $element_type
 * @property string $specification
 * @property string $rect_pos
 * @property string $description
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * 
 * @property \Illuminate\Database\Eloquent\Collection $business_zones
 * @property \Illuminate\Database\Eloquent\Collection $business_zone_maps
 * @property \Illuminate\Database\Eloquent\Collection $dwell_times
 * @property \Illuminate\Database\Eloquent\Collection $dwell_zone_camera_maps
 * @property \Illuminate\Database\Eloquent\Collection $zone_camera_maps
 * @property \Illuminate\Database\Eloquent\Collection $gates
 * @property \Illuminate\Database\Eloquent\Collection $zone_line_maps
 * @property \Illuminate\Database\Eloquent\Collection $zone_polygon_maps
 *
 * @package App\Models
 */
class Zone extends Eloquent
{
	protected $table = 'zone';
	public $timestamps = false;

	protected $casts = [
		'area' => 'float',
		'type_id' => 'int',
		'element_type' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'name',
		'position',
		'area',
		'type_id',
		'element_type',
		'specification',
		'rect_pos',
		'description',
		'create_time',
		'update_time',
		'status_id'
	];

	public function business_zones()
	{
		return $this->hasMany(\App\Models\BusinessZone::class);
	}

	public function business_zone_maps()
	{
		return $this->hasMany(\App\Models\BusinessZoneMap::class);
	}

	public function dwell_times()
	{
		return $this->hasMany(\App\Models\DwellTime::class);
	}

	public function dwell_zone_camera_maps()
	{
		return $this->hasMany(\App\Models\DwellZoneCameraMap::class);
	}

	public function zone_camera_maps()
	{
		return $this->hasMany(\App\Models\ZoneCameraMap::class);
	}

	public function gates()
	{
		return $this->belongsToMany(\App\Models\Gate::class, 'zone_gate_map')
					->withPivot('create_time', 'update_time', 'status_id');
	}

	public function zone_line_maps()
	{
		return $this->hasMany(\App\Models\ZoneLineMap::class);
	}

	public function zone_polygon_maps()
	{
		return $this->hasMany(\App\Models\ZonePolygonMap::class);
	}
}
