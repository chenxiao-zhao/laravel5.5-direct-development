<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UploadLog
 * 
 * @property int $id
 * @property \Carbon\Carbon $create_time
 * @property string $host_name
 * @property string $module_name
 * @property string $log_cloud_path
 *
 * @package App\Models
 */
class UploadLog extends Eloquent
{
	public $timestamps = false;

	protected $dates = [
		'create_time'
	];

	protected $fillable = [
		'create_time',
		'host_name',
		'module_name',
		'log_cloud_path'
	];
}
