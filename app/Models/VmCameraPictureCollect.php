<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 10 Dec 2018 06:26:43 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class VmCameraPictureCollect
 * 
 * @property int $id
 * @property int $camera_id
 * @property int $capture_status
 * @property string $remark
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmCamera $vm_camera
 *
 * @package App\Models
 */
class VmCameraPictureCollect extends Eloquent
{
	protected $table = 'vm_camera_picture_collect';
	public $timestamps = false;

	protected $casts = [
		'camera_id' => 'int',
		'capture_status' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'camera_id',
		'capture_status',
		'remark',
		'create_time',
		'update_time'
	];

	public function vm_camera()
	{
		return $this->belongsTo(\App\Models\VmCamera::class, 'id');
	}
}
