<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PropertyInfo
 * 
 * @property int $id
 * @property int $property_id
 * @property int $sale_target_1
 * @property int $sale_target_2
 * @property int $sale_target_3
 * @property int $sale_target_4
 * @property int $sale_target_5
 * @property int $sale_target_6
 * @property int $sale_target_7
 * @property int $sale_target_8
 * @property int $sale_target_9
 * @property int $sale_target_10
 * @property int $sale_target_11
 * @property int $sale_target_12
 * @property int $flow_target_1
 * @property int $flow_target_2
 * @property int $flow_target_3
 * @property int $flow_target_4
 * @property int $flow_target_5
 * @property int $flow_target_6
 * @property int $flow_target_7
 * @property int $flow_target_8
 * @property int $flow_target_9
 * @property int $flow_target_10
 * @property int $flow_target_11
 * @property int $flow_target_12
 * @property string $description
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * 
 * @property \App\Models\VmProperty $vm_property
 *
 * @package App\Models
 */
class PropertyInfo extends Eloquent
{
	protected $table = 'property_info';
	public $timestamps = false;

	protected $casts = [
		'property_id' => 'int',
		'sale_target_1' => 'int',
		'sale_target_2' => 'int',
		'sale_target_3' => 'int',
		'sale_target_4' => 'int',
		'sale_target_5' => 'int',
		'sale_target_6' => 'int',
		'sale_target_7' => 'int',
		'sale_target_8' => 'int',
		'sale_target_9' => 'int',
		'sale_target_10' => 'int',
		'sale_target_11' => 'int',
		'sale_target_12' => 'int',
		'flow_target_1' => 'int',
		'flow_target_2' => 'int',
		'flow_target_3' => 'int',
		'flow_target_4' => 'int',
		'flow_target_5' => 'int',
		'flow_target_6' => 'int',
		'flow_target_7' => 'int',
		'flow_target_8' => 'int',
		'flow_target_9' => 'int',
		'flow_target_10' => 'int',
		'flow_target_11' => 'int',
		'flow_target_12' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'property_id',
		'sale_target_1',
		'sale_target_2',
		'sale_target_3',
		'sale_target_4',
		'sale_target_5',
		'sale_target_6',
		'sale_target_7',
		'sale_target_8',
		'sale_target_9',
		'sale_target_10',
		'sale_target_11',
		'sale_target_12',
		'flow_target_1',
		'flow_target_2',
		'flow_target_3',
		'flow_target_4',
		'flow_target_5',
		'flow_target_6',
		'flow_target_7',
		'flow_target_8',
		'flow_target_9',
		'flow_target_10',
		'flow_target_11',
		'flow_target_12',
		'description',
		'create_time',
		'update_time',
		'status_id'
	];

	public function vm_property()
	{
		return $this->belongsTo(\App\Models\VmProperty::class, 'property_id');
	}
}
