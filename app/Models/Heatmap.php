<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Heatmap
 * 
 * @property int $id
 * @property int $business_zone_id
 * @property string $heatmap_url
 * @property int $time_range
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\BusinessZone $business_zone
 *
 * @package App\Models
 */
class Heatmap extends Eloquent
{
	protected $table = 'heatmap';
	public $timestamps = false;

	protected $casts = [
		'business_zone_id' => 'int',
		'time_range' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'business_zone_id',
		'heatmap_url',
		'time_range',
		'create_time',
		'update_time'
	];

	public function business_zone()
	{
		return $this->belongsTo(\App\Models\BusinessZone::class);
	}
}
