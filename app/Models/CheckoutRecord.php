<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CheckoutRecord
 * 
 * @property int $id
 * @property int $polygon_id
 * @property \Carbon\Carbon $timestamp
 * @property \Carbon\Carbon $start_time
 * @property \Carbon\Carbon $end_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmPolygonspec $vm_polygonspec
 *
 * @package App\Models
 */
class CheckoutRecord extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'polygon_id' => 'int'
	];

	protected $dates = [
		'timestamp',
		'start_time',
		'end_time',
		'update_time'
	];

	protected $fillable = [
		'polygon_id',
		'timestamp',
		'start_time',
		'end_time',
		'update_time'
	];

	public function vm_polygonspec()
	{
		return $this->belongsTo(\App\Models\VmPolygonspec::class, 'polygon_id');
	}
}
