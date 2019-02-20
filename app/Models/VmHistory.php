<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Oct 2018 11:36:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VmHistory
 * 
 * @property int $id
 * @property int $user_id
 * @property string $operation_table
 * @property string $operation_type
 * @property string $log
 * @property \Carbon\Carbon $history_time
 *
 * @package App\Models
 */
class VmHistory extends Eloquent
{
	protected $table = 'vm_history';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'history_time'
	];

	protected $fillable = [
		'user_id',
		'operation_table',
		'operation_type',
		'log',
		'history_time'
	];
}
