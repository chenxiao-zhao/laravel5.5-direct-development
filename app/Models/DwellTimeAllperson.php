<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DwellTimeAllperson
 * 
 * @property int $id
 * @property int $re_id
 * @property int $dwell_time
 * @property int $re_id_count
 * @property int $type_id
 * @property int $model_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 *
 * @package App\Models
 */
class DwellTimeAllperson extends Eloquent
{
	protected $table = 'dwell_time_allperson';
	public $timestamps = false;

	protected $casts = [
		're_id' => 'int',
		'dwell_time' => 'int',
		're_id_count' => 'int',
		'type_id' => 'int',
		'model_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		're_id',
		'dwell_time',
		're_id_count',
		'type_id',
		'model_id',
		'create_time',
		'update_time'
	];
}
