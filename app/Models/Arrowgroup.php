<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Arrowgroup
 * 
 * @property int $id
 * @property int $pathflow_id
 * @property int $gate_id
 * @property string $name
 * @property string $location
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * 
 * @property \App\Models\Gate $gate
 * @property \App\Models\Pathflow $pathflow
 * @property \Illuminate\Database\Eloquent\Collection $arrows
 *
 * @package App\Models
 */
class Arrowgroup extends Eloquent
{
	protected $table = 'arrowgroup';
	public $timestamps = false;

	protected $casts = [
		'pathflow_id' => 'int',
		'gate_id' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'pathflow_id',
		'gate_id',
		'name',
		'location',
		'create_time',
		'update_time',
		'status_id'
	];

	public function gate()
	{
		return $this->belongsTo(\App\Models\Gate::class);
	}

	public function pathflow()
	{
		return $this->belongsTo(\App\Models\Pathflow::class);
	}

	public function arrows()
	{
		return $this->hasMany(\App\Models\Arrow::class);
	}
}
