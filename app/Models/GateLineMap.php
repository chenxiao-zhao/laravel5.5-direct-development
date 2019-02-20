<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GateLineMap
 * 
 * @property int $gate_id
 * @property int $line_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @property int $id
 * 
 * @property \App\Models\Gate $gate
 * @property \App\Models\VmLinespec $vm_linespec
 *
 * @package App\Models
 */
class GateLineMap extends Eloquent
{
	protected $table = 'gate_line_map';
	public $timestamps = false;

	protected $casts = [
		'gate_id' => 'int',
		'line_id' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'gate_id',
		'line_id',
		'create_time',
		'update_time',
		'status_id'
	];

	public function gate()
	{
		return $this->belongsTo(\App\Models\Gate::class);
	}

	public function vm_linespec()
	{
		return $this->belongsTo(\App\Models\VmLinespec::class, 'line_id');
	}
}
