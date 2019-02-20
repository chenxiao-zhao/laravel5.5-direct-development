<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Oct 2018 11:36:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VmPolygonspecHistory
 * 
 * @property int $id
 * @property string $name
 * @property int $camera_id
 * @property int $zone_id
 * @property string $specification
 * @property string $extra_parameter
 * @property bool $enabled
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \Carbon\Carbon $history_time
 * @property string $history_action
 *
 * @package App\Models
 */
class VmPolygonspecHistory extends Eloquent
{
	protected $table = 'vm_polygonspec_history';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'camera_id' => 'int',
		'zone_id' => 'int',
		'enabled' => 'bool'
	];

	protected $dates = [
		'create_time',
		'update_time',
		'history_time'
	];

	protected $fillable = [
		'id',
		'name',
		'camera_id',
		'zone_id',
		'specification',
		'extra_parameter',
		'enabled',
		'create_time',
		'update_time',
		'history_time',
		'history_action'
	];
}
