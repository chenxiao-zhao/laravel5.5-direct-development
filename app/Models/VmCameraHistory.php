<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Oct 2018 11:36:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VmCameraHistory
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
 * @property string $capture_host
 * @property string $extra_parameter
 * @property string $capture_dir
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \Carbon\Carbon $history_time
 * @property string $history_action
 *
 * @package App\Models
 */
class VmCameraHistory extends Eloquent
{
	protected $table = 'vm_camera_history';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'position_x' => 'float',
		'position_y' => 'float',
		'direction_angle' => 'float',
		'enabled' => 'bool',
		'property_id' => 'int',
		'algo_parameter_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time',
		'history_time'
	];

	protected $fillable = [
		'id',
		'name',
		'stream_url',
		'screen_capture',
		'position_x',
		'position_y',
		'direction_angle',
		'enabled',
		'property_id',
		'algo_parameter_id',
		'capture_host',
		'extra_parameter',
		'capture_dir',
		'create_time',
		'update_time',
		'history_time',
		'history_action'
	];
}
