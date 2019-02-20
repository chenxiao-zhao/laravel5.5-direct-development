<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LinecountingDeltum
 * 
 * @property int $id
 * @property int $line_id
 * @property int $exit_delta
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmLinespec $vm_linespec
 *
 * @package App\Models
 */
class LinecountingDeltum extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'line_id' => 'int',
		'exit_delta' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'line_id',
		'exit_delta',
		'create_time',
		'update_time'
	];

	public function vm_linespec()
	{
		return $this->belongsTo(\App\Models\VmLinespec::class, 'line_id');
	}
}
