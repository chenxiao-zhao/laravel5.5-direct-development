<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class QueuecountRecord
 * 
 * @property int $id
 * @property int $polygon_id
 * @property \Carbon\Carbon $timestamp
 * @property int $counting
 * @property \Carbon\Carbon $update_time
 * @property \Carbon\Carbon $create_time
 * 
 * @property \App\Models\VmPolygonspec $vm_polygonspec
 *
 * @package App\Models
 */
class QueuecountRecord extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'polygon_id' => 'int',
		'counting' => 'int'
	];

	protected $dates = [
		'timestamp',
		'update_time',
		'create_time'
	];

	protected $fillable = [
		'polygon_id',
		'timestamp',
		'counting',
		'update_time',
		'create_time'
	];

	public function vm_polygonspec()
	{
		return $this->belongsTo(\App\Models\VmPolygonspec::class, 'polygon_id');
	}
}
