<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Arrow
 * 
 * @property int $id
 * @property string $name
 * @property int $arrowgroup_id
 * @property int $angle
 * @property string $color
 * @property float $position_x
 * @property float $position_y
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @property bool $ispathby
 * 
 * @property \App\Models\Arrowgroup $arrowgroup
 * @property \Illuminate\Database\Eloquent\Collection $arrow_line_maps
 *
 * @package App\Models
 */
class Arrow extends Eloquent
{
	protected $table = 'arrow';
	public $timestamps = false;

	protected $casts = [
		'arrowgroup_id' => 'int',
		'angle' => 'int',
		'position_x' => 'float',
		'position_y' => 'float',
		'status_id' => 'int',
		'ispathby' => 'bool'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'name',
		'arrowgroup_id',
		'angle',
		'color',
		'position_x',
		'position_y',
		'create_time',
		'update_time',
		'status_id',
		'ispathby'
	];

	public function arrowgroup()
	{
		return $this->belongsTo(\App\Models\Arrowgroup::class);
	}

	public function arrow_line_maps()
	{
		return $this->hasMany(\App\Models\ArrowLineMap::class);
	}
}
