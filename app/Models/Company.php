<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property string $address
 * @property \Carbon\Carbon $daily_start
 * @property \Carbon\Carbon $daily_end
 * @property string $weekday
 * @property int $status_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \Illuminate\Database\Eloquent\Collection $vm_properties
 *
 * @package App\Models
 */
class Company extends Eloquent
{
	protected $table = 'company';
	public $timestamps = false;

	protected $casts = [
		'status_id' => 'int'
	];

	protected $dates = [
		'daily_start',
		'daily_end',
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'name',
		'address',
		'daily_start',
		'daily_end',
		'weekday',
		'status_id',
		'create_time',
		'update_time'
	];

	public function vm_properties()
	{
		return $this->hasMany(\App\Models\VmProperty::class);
	}
}
