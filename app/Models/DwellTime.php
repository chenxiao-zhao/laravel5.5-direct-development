<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DwellTime
 * 
 * @property int $id
 * @property int $type_id
 * @property int $model_id
 * @property int $dwell_time
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 *
 * @package App\Models
 */
class DwellTime extends Eloquent
{
	protected $table = 'dwell_time';
	public $timestamps = false;

	protected $casts = [
		'type_id' => 'int',
		'model_id' => 'int',
		'dwell_time' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'type_id',
		'model_id',
		'dwell_time',
		'create_time',
		'update_time'
	];
}
