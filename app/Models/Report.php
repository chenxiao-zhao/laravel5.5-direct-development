<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Report
 * 
 * @property int $id
 * @property int $property_id
 * @property string $report_url
 * @property int $time_range
 * @property int $space_type
 * @property int $report_type
 * @property string $date
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 *
 * @package App\Models
 */
class Report extends Eloquent
{
	protected $table = 'report';
	public $timestamps = false;

	protected $casts = [
		'property_id' => 'int',
		'time_range' => 'int',
		'space_type' => 'int',
		'report_type' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'property_id',
		'report_url',
		'time_range',
		'space_type',
		'report_type',
		'date',
		'create_time',
		'update_time',
		'status_id'
	];
}
