<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VmAlgoParameter
 * 
 * @property int $id
 * @property string $name
 * @property string $algo_type
 * @property string $algo_resolution
 * @property \Carbon\Carbon $daily_start
 * @property \Carbon\Carbon $daily_end
 * @property string $capture_type
 * @property float $capture_inteval_sec
 * @property int $media_keep_hours
 * @property string $message_queue_url
 * @property string $algo_config_json_str
 * @property string $extra_parameter
 * @property bool $upload_cloud
 * @property int $mem_cost_mb
 * @property float $cpu_cost
 * @property float $gpu_cost
 * @property int $worker_number
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \Illuminate\Database\Eloquent\Collection $vm_cameras
 *
 * @package App\Models
 */
class VmAlgoParameter extends Eloquent
{
	protected $table = 'vm_algo_parameter';
	public $timestamps = false;

	protected $casts = [
		'capture_inteval_sec' => 'float',
		'media_keep_hours' => 'int',
		'upload_cloud' => 'bool',
		'mem_cost_mb' => 'int',
		'cpu_cost' => 'float',
		'gpu_cost' => 'float',
		'worker_number' => 'int'
	];

	protected $dates = [
		'daily_start',
		'daily_end',
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'name',
		'algo_type',
		'algo_resolution',
		'daily_start',
		'daily_end',
		'capture_type',
		'capture_inteval_sec',
		'media_keep_hours',
		'message_queue_url',
		'algo_config_json_str',
		'extra_parameter',
		'upload_cloud',
		'mem_cost_mb',
		'cpu_cost',
		'gpu_cost',
		'worker_number',
		'create_time',
		'update_time'
	];

	public function vm_cameras()
	{
		return $this->hasMany(\App\Models\VmCamera::class, 'algo_parameter_id');
	}
}
