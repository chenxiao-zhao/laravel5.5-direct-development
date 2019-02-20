<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LinecountingRecord
 * 
 * @property int $id
 * @property int $line_id
 * @property int $enter_num
 * @property int $exit_num
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmLinespec $vm_linespec
 *
 * @package App\Models
 */
class LinecountingRecord extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'line_id' => 'int',
		'enter_num' => 'int',
		'exit_num' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'line_id',
		'enter_num',
		'exit_num',
		'create_time',
		'update_time'
	];

	public function vm_linespec()
	{
		return $this->belongsTo(\App\Models\VmLinespec::class, 'line_id');
	}
}
