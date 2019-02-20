<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BusinessZoneMap
 * 
 * @property int $id
 * @property int $business_zone_id
 * @property int $zone_id
 * @property int $status_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\Zone $zone
 * @property \App\Models\BusinessZone $business_zone
 *
 * @package App\Models
 */
class BusinessZoneMap extends Eloquent
{
	protected $table = 'business_zone_map';
	public $timestamps = false;

	protected $casts = [
		'business_zone_id' => 'int',
		'zone_id' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'business_zone_id',
		'zone_id',
		'status_id',
		'create_time',
		'update_time'
	];

	public function zone()
	{
		return $this->belongsTo(\App\Models\Zone::class);
	}

	public function business_zone()
	{
		return $this->belongsTo(\App\Models\BusinessZone::class);
	}
}
