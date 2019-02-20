<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Oct 2018 11:36:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VmProperty
 * 
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property int $business_zone_id
 * @property string $map_url
 * @property string $longitude
 * @property string $latitude
 * @property string $province
 * @property string $city
 * @property string $address
 * @property float $area
 * @property \Carbon\Carbon $daily_start
 * @property \Carbon\Carbon $daily_end
 * @property string $weekday
 * @property string $time_zone
 * @property string $description
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * 
 * @property \App\Models\BusinessZone $business_zone
 * @property \App\Models\Company $company
 * @property \Illuminate\Database\Eloquent\Collection $business_zones
 * @property \Illuminate\Database\Eloquent\Collection $property_infos
 *
 * @package App\Models
 */
class VmProperty extends Eloquent
{
	protected $table = 'vm_property';
	public $timestamps = false;

	protected $casts = [
		'company_id' => 'int',
		'business_zone_id' => 'int',
		'area' => 'float',
		'status_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'company_id',
		'name',
		'business_zone_id',
		'map_url',
		'longitude',
		'latitude',
		'province',
		'city',
		'address',
		'area',
		'daily_start',
		'daily_end',
		'weekday',
		'time_zone',
		'description',
		'create_time',
		'update_time',
		'status_id'
	];

	public function business_zone()
	{
		return $this->belongsTo(\App\Models\BusinessZone::class);
	}

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class);
	}

	public function business_zones()
	{
		return $this->hasMany(\App\Models\BusinessZone::class, 'property_id');
	}

	public function property_infos()
	{
		return $this->hasMany(\App\Models\PropertyInfo::class, 'property_id');
	}
}
