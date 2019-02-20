<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserLog
 * 
 * @property int $id
 * @property int $user_id
 * @property \Carbon\Carbon $login_time
 * @property \Carbon\Carbon $logout_time
 * @property string $operate_model
 *
 * @package App\Models
 */
class UserLog extends Eloquent
{
	protected $table = 'user_log';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'login_time',
		'logout_time'
	];

	protected $fillable = [
		'user_id',
		'login_time',
		'logout_time',
		'operate_model'
	];
}
