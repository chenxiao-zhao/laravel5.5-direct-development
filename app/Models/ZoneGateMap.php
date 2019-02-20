<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Oct 2018 11:36:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ZoneGateMap
 * 
 * @property int $zone_id
 * @property int $gate_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * 
 * @property \App\Models\Gate $gate
 * @property \App\Models\Zone $zone
 *
 * @package App\Models
 */
class ZoneGateMap extends Eloquent
{
	protected $table = 'zone_gate_map';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'zone_id' => 'int',
		'gate_id' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'create_time',
		'update_time',
		'status_id'
	];

	public function gate()
	{
		return $this->belongsTo(\App\Models\Gate::class);
	}

	public function zone()
	{
		return $this->belongsTo(\App\Models\Zone::class);
	}
}
