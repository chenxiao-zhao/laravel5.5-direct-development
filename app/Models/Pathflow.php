<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pathflow
 * 
 * @property int $id
 * @property int $business_zone_id
 * @property string $pathflow_pic
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\BusinessZone $business_zone
 * @property \Illuminate\Database\Eloquent\Collection $arrowgroups
 *
 * @package App\Models
 */
class Pathflow extends Eloquent
{
	protected $table = 'pathflow';
	public $timestamps = false;

	protected $casts = [
		'business_zone_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'business_zone_id',
		'pathflow_pic',
		'create_time',
		'update_time'
	];

	public function business_zone()
	{
		return $this->belongsTo(\App\Models\BusinessZone::class, 'id');
	}

	public function arrowgroups()
	{
		return $this->hasMany(\App\Models\Arrowgroup::class);
	}
}
