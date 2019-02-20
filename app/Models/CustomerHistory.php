<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CustomerHistory
 * 
 * @property int $id
 * @property \Carbon\Carbon $update_time
 * @property int $type
 * @property int $customer_id
 *
 * @package App\Models
 */
class CustomerHistory extends Eloquent
{
	protected $table = 'customer_history';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'type' => 'int',
		'customer_id' => 'int'
	];

	protected $dates = [
		'update_time'
	];

	protected $fillable = [
		'update_time',
		'type',
		'customer_id'
	];
}
