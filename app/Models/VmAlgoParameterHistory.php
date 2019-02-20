<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Oct 2018 11:36:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VmAlgoParameterHistory
 * 
 * @property int $id
 * @property string $name
 * @property string $algo_type
 * @property string $algo_resolution
 * @property \Carbon\Carbon $daily_start
 * @property \Carbon\Carbon $daily_end
 * @property string $capture_type
 * @property int $capture_inteval_sec
 * @property int $media_keep_hours
 * @property string $algo_config_json_str
 * @property string $message_queue_url
 * @property string $extra_parameter
 * @property bool $upload_cloud
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $history_time
 * @property string $history_action
 * @property int $mem_cost_mb
 * @property float $cpu_cost
 * @property float $gpu_cost
 * @property int $worker_number
 * @property \Carbon\Carbon $update_time
 *
 * @package App\Models
 */
class VmAlgoParameterHistory extends Eloquent
{
	protected $table = 'vm_algo_parameter_history';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'capture_inteval_sec' => 'int',
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
		'history_time',
		'update_time'
	];

	protected $fillable = [
		'id',
		'name',
		'algo_type',
		'algo_resolution',
		'daily_start',
		'daily_end',
		'capture_type',
		'capture_inteval_sec',
		'media_keep_hours',
		'algo_config_json_str',
		'message_queue_url',
		'extra_parameter',
		'upload_cloud',
		'create_time',
		'history_time',
		'history_action',
		'mem_cost_mb',
		'cpu_cost',
		'gpu_cost',
		'worker_number',
		'update_time'
	];
}
