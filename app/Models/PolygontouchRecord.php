<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PolygontouchRecord
 * 
 * @property int $id
 * @property int $polygon_id
 * @property int $touch_num
 * @property \Carbon\Carbon $created_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmPolygonspec $vm_polygonspec
 *
 * @package App\Models
 */
class PolygontouchRecord extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'polygon_id' => 'int',
		'touch_num' => 'int'
	];

	protected $dates = [
		'created_time',
		'update_time'
	];

	protected $fillable = [
		'polygon_id',
		'touch_num',
		'created_time',
		'update_time'
	];

	public function vm_polygonspec()
	{
		return $this->belongsTo(\App\Models\VmPolygonspec::class, 'polygon_id');
	}
}
