<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Oct 2018 11:36:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VmLinespec
 * 
 * @property int $id
 * @property string $name
 * @property int $camera_id
 * @property string $specification
 * @property int $type_id
 * @property string $extra_parameter
 * @property bool $enabled
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmCamera $vm_camera
 * @property \Illuminate\Database\Eloquent\Collection $agender_records
 * @property \Illuminate\Database\Eloquent\Collection $arrow_line_maps
 * @property \Illuminate\Database\Eloquent\Collection $gate_line_maps
 * @property \Illuminate\Database\Eloquent\Collection $linecounting_delta
 * @property \Illuminate\Database\Eloquent\Collection $linecounting_records
 * @property \Illuminate\Database\Eloquent\Collection $zone_line_maps
 *
 * @package App\Models
 */
class VmLinespec extends Eloquent
{
	protected $table = 'vm_linespec';
	public $timestamps = false;

	protected $casts = [
		'camera_id' => 'int',
		'type_id' => 'int',
		'enabled' => 'bool'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'name',
		'camera_id',
		'specification',
		'type_id',
		'extra_parameter',
		'enabled',
		'create_time',
		'update_time'
	];

	public function vm_camera()
	{
		return $this->belongsTo(\App\Models\VmCamera::class, 'camera_id');
	}

	public function agender_records()
	{
		return $this->hasMany(\App\Models\AgenderRecord::class, 'line_id');
	}

	public function arrow_line_maps()
	{
		return $this->hasMany(\App\Models\ArrowLineMap::class, 'line_id');
	}

	public function gate_line_maps()
	{
		return $this->hasMany(\App\Models\GateLineMap::class, 'line_id');
	}

	public function linecounting_delta()
	{
		return $this->hasMany(\App\Models\LinecountingDeltum::class, 'line_id');
	}

	public function linecounting_records()
	{
		return $this->hasMany(\App\Models\LinecountingRecord::class, 'line_id');
	}

	public function zone_line_maps()
	{
		return $this->hasMany(\App\Models\ZoneLineMap::class, 'line_id');
	}
}
