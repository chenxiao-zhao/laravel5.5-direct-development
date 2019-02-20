<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BusinessMonitor
 * 
 * @property int $id
 * @property string $monitor_assign
 * @property string $monitor_sql
 * @property int $interval_time
 * @property \Carbon\Carbon $created_time
 * @property string $email_receivers
 * @property string $wechat_receivers
 * @property int $delete_flag
 *
 * @package App\Models
 */
class BusinessMonitor extends Eloquent
{
	protected $table = 'business_monitor';
	public $timestamps = false;

	protected $casts = [
		'interval_time' => 'int',
		'delete_flag' => 'int'
	];

	protected $dates = [
		'created_time'
	];

	protected $fillable = [
		'monitor_assign',
		'monitor_sql',
		'interval_time',
		'created_time',
		'email_receivers',
		'wechat_receivers',
		'delete_flag'
	];
}
