<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BusinessZone
 * 
 * @property int $id
 * @property int $zone_index
 * @property string $name
 * @property int $property_id
 * @property int $gate_id
 * @property int $type_id
 * @property int $parent_id
 * @property int $business_type_id
 * @property string $map_url
 * @property string $description
 * @property int $status_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmProperty $vm_property
 * @property \Illuminate\Database\Eloquent\Collection $business_sale_records
 * @property \Illuminate\Database\Eloquent\Collection $business_zone_maps
 * @property \Illuminate\Database\Eloquent\Collection $heatmaps
 * @property \App\Models\Pathflow $pathflow
 *
 * @package App\Models
 */
class BusinessZone extends Eloquent
{
	protected $table = 'business_zone';
	public $timestamps = false;

	protected $casts = [
		'zone_index' => 'int',
		'property_id' => 'int',
		'gate_id' => 'int',
		'type_id' => 'int',
		'parent_id' => 'int',
		'business_type_id' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'zone_index',
		'name',
		'property_id',
		'gate_id',
		'type_id',
		'parent_id',
		'business_type_id',
		'map_url',
		'description',
		'status_id',
		'create_time',
		'update_time'
	];

	public function vm_property()
	{
		return $this->belongsTo(\App\Models\VmProperty::class, 'property_id');
	}

	public function business_sale_records()
	{
		return $this->hasMany(\App\Models\BusinessSaleRecord::class);
	}

	public function business_zone_maps()
	{
		return $this->hasMany(\App\Models\BusinessZoneMap::class);
	}

	public function heatmaps()
	{
		return $this->hasMany(\App\Models\Heatmap::class);
	}

	public function pathflow()
	{
		return $this->hasOne(\App\Models\Pathflow::class, 'id');
	}
}
