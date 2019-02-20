<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DwellMatchRecord
 * 
 * @property int $id
 * @property int $line_id
 * @property int $track_id
 * @property bool $is_enter
 * @property int $object_id
 * @property float $score
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmLinespec $vm_linespec
 *
 * @package App\Models
 */
class DwellMatchRecord extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'line_id' => 'int',
		'track_id' => 'int',
		'is_enter' => 'bool',
		'object_id' => 'int',
		'score' => 'float'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'line_id',
		'track_id',
		'is_enter',
		'object_id',
		'score',
		'create_time',
		'update_time'
	];

	public function vm_linespec()
	{
		return $this->belongsTo(\App\Models\VmLinespec::class, 'line_id');
	}
}
