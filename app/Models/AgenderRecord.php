<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Oct 2018 11:36:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AgenderRecord
 * 
 * @property int $id
 * @property int $line_id
 * @property int $is_enter
 * @property int $age
 * @property int $is_male
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmLinespec $vm_linespec
 *
 * @package App\Models
 */
class AgenderRecord extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'line_id' => 'int',
		'is_enter' => 'int',
		'age' => 'int',
		'is_male' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'line_id',
		'is_enter',
		'age',
		'is_male',
		'create_time',
		'update_time'
	];

	public function vm_linespec()
	{
		return $this->belongsTo(\App\Models\VmLinespec::class, 'line_id');
	}
}
