<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class History
 * 
 * @property int $id
 * @property int $operator_id
 * @property \Carbon\Carbon $operated_time
 * @property string $operate_sql
 *
 * @package App\Models
 */
class History extends Eloquent
{
	protected $table = 'history';
	public $timestamps = false;

	protected $casts = [
		'operator_id' => 'int'
	];

	protected $dates = [
		'operated_time'
	];

	protected $fillable = [
		'operator_id',
		'operated_time',
		'operate_sql'
	];
}
