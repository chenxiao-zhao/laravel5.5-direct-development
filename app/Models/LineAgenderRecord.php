<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LineAgenderRecord
 * 
 * @property int $id
 * @property int $line_id
 * @property bool $is_enter
 * @property int $age
 * @property int $age_max
 * @property bool $is_male
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmLinespec $vm_linespec
 *
 * @package App\Models
 */
class LineAgenderRecord extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'line_id' => 'int',
		'is_enter' => 'bool',
		'age' => 'int',
		'age_max' => 'int',
		'is_male' => 'bool'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'line_id',
		'is_enter',
		'age',
		'age_max',
		'is_male',
		'create_time',
		'update_time'
	];

	public function vm_linespec()
	{
		return $this->belongsTo(\App\Models\VmLinespec::class, 'line_id');
	}
}
