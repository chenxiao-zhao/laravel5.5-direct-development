<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ArrowLineMap
 * 
 * @property int $id
 * @property int $arrow_id
 * @property int $line_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * 
 * @property \App\Models\Arrow $arrow
 * @property \App\Models\VmLinespec $vm_linespec
 *
 * @package App\Models
 */
class ArrowLineMap extends Eloquent
{
	protected $table = 'arrow_line_map';
	public $timestamps = false;

	protected $casts = [
		'arrow_id' => 'int',
		'line_id' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'arrow_id',
		'line_id',
		'create_time',
		'update_time',
		'status_id'
	];

	public function arrow()
	{
		return $this->belongsTo(\App\Models\Arrow::class);
	}

	public function vm_linespec()
	{
		return $this->belongsTo(\App\Models\VmLinespec::class, 'line_id');
	}
}
