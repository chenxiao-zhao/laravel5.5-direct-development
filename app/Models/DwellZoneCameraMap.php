<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DwellZoneCameraMap
 * 
 * @property int $id
 * @property int $zone_id
 * @property int $camera_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmCamera $vm_camera
 * @property \App\Models\Zone $zone
 *
 * @package App\Models
 */
class DwellZoneCameraMap extends Eloquent
{
	protected $table = 'dwell_zone_camera_map';
	public $timestamps = false;

	protected $casts = [
		'zone_id' => 'int',
		'camera_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'zone_id',
		'camera_id',
		'create_time',
		'update_time'
	];

	public function vm_camera()
	{
		return $this->belongsTo(\App\Models\VmCamera::class, 'camera_id');
	}

	public function zone()
	{
		return $this->belongsTo(\App\Models\Zone::class);
	}
}
