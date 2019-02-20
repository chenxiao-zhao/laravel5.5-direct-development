<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class QueuePolygonMap
 * 
 * @property int $id
 * @property int $queue_id
 * @property int $polygon_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * 
 * @property \App\Models\Queue $queue
 * @property \App\Models\VmPolygonspec $vm_polygonspec
 *
 * @package App\Models
 */
class QueuePolygonMap extends Eloquent
{
	protected $table = 'queue_polygon_map';
	public $timestamps = false;

	protected $casts = [
		'queue_id' => 'int',
		'polygon_id' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'queue_id',
		'polygon_id',
		'create_time',
		'update_time',
		'status_id'
	];

	public function queue()
	{
		return $this->belongsTo(\App\Models\Queue::class);
	}

	public function vm_polygonspec()
	{
		return $this->belongsTo(\App\Models\VmPolygonspec::class, 'polygon_id');
	}
}
