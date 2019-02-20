<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ComingTip
 * 
 * @property int $id
 * @property \Carbon\Carbon $coming_time
 * @property string $read_status
 * @property string $del_user
 * @property float $similarity_score
 * @property string $avatar_url
 * @property int $coming_count
 * @property int $vm_linespec_id
 * @property int $customer_id
 * 
 * @property \App\Models\Customer $customer
 * @property \App\Models\VmLinespec $vm_linespec
 *
 * @package App\Models
 */
class ComingTip extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'similarity_score' => 'float',
		'coming_count' => 'int',
		'vm_linespec_id' => 'int',
		'customer_id' => 'int'
	];

	protected $dates = [
		'coming_time'
	];

	protected $fillable = [
		'coming_time',
		'read_status',
		'del_user',
		'similarity_score',
		'avatar_url',
		'coming_count',
		'vm_linespec_id',
		'customer_id'
	];

	public function customer()
	{
		return $this->belongsTo(\App\Models\Customer::class);
	}

	public function vm_linespec()
	{
		return $this->belongsTo(\App\Models\VmLinespec::class);
	}
}
