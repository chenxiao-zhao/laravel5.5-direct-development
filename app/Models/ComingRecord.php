<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ComingRecord
 * 
 * @property int $id
 * @property \Carbon\Carbon $coming_time
 * @property string $avatar_url
 * @property int $age
 * @property int $age_max
 * @property bool $ismale
 * @property int $vm_linespec_id
 * @property float $similarity_score
 * @property int $customer_object_id
 * @property bool $is_front
 * @property bool $is_enter
 * 
 * @property \App\Models\VmLinespec $vm_linespec
 *
 * @package App\Models
 */
class ComingRecord extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'age' => 'int',
		'age_max' => 'int',
		'ismale' => 'bool',
		'vm_linespec_id' => 'int',
		'similarity_score' => 'float',
		'customer_object_id' => 'int',
		'is_front' => 'bool',
		'is_enter' => 'bool'
	];

	protected $dates = [
		'coming_time'
	];

	protected $fillable = [
		'coming_time',
		'avatar_url',
		'age',
		'age_max',
		'ismale',
		'vm_linespec_id',
		'similarity_score',
		'customer_object_id',
		'is_front',
		'is_enter'
	];

	public function vm_linespec()
	{
		return $this->belongsTo(\App\Models\VmLinespec::class);
	}
}
