<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HolidayEvent
 * 
 * @property int $id
 * @property string $name
 * @property int $type_id
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $end_date
 * @property string $description
 * @property \Carbon\Carbon $creat_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 *
 * @package App\Models
 */
class HolidayEvent extends Eloquent
{
	protected $table = 'holiday_event';
	public $timestamps = false;

	protected $casts = [
		'type_id' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'start_date',
		'end_date',
		'creat_time',
		'update_time'
	];

	protected $fillable = [
		'name',
		'type_id',
		'start_date',
		'end_date',
		'description',
		'creat_time',
		'update_time',
		'status_id'
	];
}
