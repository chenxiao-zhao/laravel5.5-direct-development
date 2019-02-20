<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Oct 2018 11:36:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VmCamera
 * 
 * @property int $id
 * @property string $name
 * @property string $stream_url
 * @property string $screen_capture
 * @property float $position_x
 * @property float $position_y
 * @property float $direction_angle
 * @property bool $enabled
 * @property int $property_id
 * @property int $algo_parameter_id
 * @property string $management_url
 * @property string $capture_host
 * @property string $extra_parameter
 * @property string $capture_dir
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmAlgoParameter $vm_algo_parameter
 * @property \Illuminate\Database\Eloquent\Collection $dwell_zone_camera_maps
 * @property \App\Models\VmCameraPictureCollect $vm_camera_picture_collect
 * @property \Illuminate\Database\Eloquent\Collection $vm_linespecs
 * @property \Illuminate\Database\Eloquent\Collection $vm_polygonspecs
 * @property \Illuminate\Database\Eloquent\Collection $zone_camera_maps
 *
 * @package App\Models
 */
class VmCamera extends Eloquent
{
	protected $table = 'vm_camera';
	public $timestamps = false;

	protected $casts = [
		'position_x' => 'float',
		'position_y' => 'float',
		'direction_angle' => 'float',
		'enabled' => 'bool',
		'property_id' => 'int',
		'algo_parameter_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'name',
		'stream_url',
		'screen_capture',
		'position_x',
		'position_y',
		'direction_angle',
		'enabled',
		'property_id',
		'algo_parameter_id',
		'management_url',
		'capture_host',
		'extra_parameter',
		'capture_dir',
		'create_time',
		'update_time'
	];

	public function vm_algo_parameter()
	{
		return $this->belongsTo(\App\Models\VmAlgoParameter::class, 'algo_parameter_id');
	}

	public function dwell_zone_camera_maps()
	{
		return $this->hasMany(\App\Models\DwellZoneCameraMap::class, 'camera_id');
	}

	public function vm_camera_picture_collect()
	{
		return $this->hasOne(\App\Models\VmCameraPictureCollect::class, 'id');
	}

	public function vm_linespecs()
	{
		return $this->hasMany(\App\Models\VmLinespec::class, 'camera_id');
	}

	public function vm_polygonspecs()
	{
		return $this->hasMany(\App\Models\VmPolygonspec::class, 'camera_id');
	}

	public function zone_camera_maps()
	{
		return $this->hasMany(\App\Models\ZoneCameraMap::class, 'camera_id');
	}
}
