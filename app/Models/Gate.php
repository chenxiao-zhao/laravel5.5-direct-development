<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Gate
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $status_id
 * @property string $arrow_specification
 * @property float $position_x
 * @property float $position_y
 * @property int $gate_index
 * @property string $gate_map_url
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \Illuminate\Database\Eloquent\Collection $arrowgroups
 * @property \Illuminate\Database\Eloquent\Collection $gate_line_maps
 * @property \Illuminate\Database\Eloquent\Collection $zones
 *
 * @package App\Models
 */
class Gate extends Eloquent
{
	protected $table = 'gate';
	public $timestamps = false;

	protected $casts = [
		'status_id' => 'int',
		'position_x' => 'float',
		'position_y' => 'float',
		'gate_index' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'name',
		'description',
		'status_id',
		'arrow_specification',
		'position_x',
		'position_y',
		'gate_index',
		'gate_map_url',
		'create_time',
		'update_time'
	];

	public function arrowgroups()
	{
		return $this->hasMany(\App\Models\Arrowgroup::class);
	}

	public function gate_line_maps()
	{
		return $this->hasMany(\App\Models\GateLineMap::class);
	}

	public function zones()
	{
		return $this->belongsToMany(\App\Models\Zone::class, 'zone_gate_map')
					->withPivot('id', 'create_time', 'update_time', 'status_id');
	}
}
