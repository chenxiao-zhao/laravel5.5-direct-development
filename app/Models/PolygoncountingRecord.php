<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PolygoncountingRecord
 * 
 * @property int $id
 * @property int $polygon_id
 * @property int $enter_num
 * @property int $exit_num
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmPolygonspec $vm_polygonspec
 *
 * @package App\Models
 */
class PolygoncountingRecord extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'polygon_id' => 'int',
		'enter_num' => 'int',
		'exit_num' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'polygon_id',
		'enter_num',
		'exit_num',
		'create_time',
		'update_time'
	];

	public function vm_polygonspec()
	{
		return $this->belongsTo(\App\Models\VmPolygonspec::class, 'polygon_id');
	}
}
