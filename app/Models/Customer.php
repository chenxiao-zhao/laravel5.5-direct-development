<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Customer
 * 
 * @property int $id
 * @property string $avatar_url
 * @property string $name
 * @property int $age
 * @property int $age_max
 * @property bool $ismale
 * @property string $mobile
 * @property int $type
 * @property string $feature_url
 * @property int $company_id
 * @property int $customer_object_id
 * @property int $property_id
 * @property string $remark
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * 
 * @property \App\Models\VmProperty $vm_property
 * @property \Illuminate\Database\Eloquent\Collection $coming_tips
 *
 * @package App\Models
 */
class Customer extends Eloquent
{
	protected $table = 'customer';
	public $timestamps = false;

	protected $casts = [
		'age' => 'int',
		'age_max' => 'int',
		'ismale' => 'bool',
		'type' => 'int',
		'company_id' => 'int',
		'customer_object_id' => 'int',
		'property_id' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'avatar_url',
		'name',
		'age',
		'age_max',
		'ismale',
		'mobile',
		'type',
		'feature_url',
		'company_id',
		'customer_object_id',
		'property_id',
		'remark',
		'create_time',
		'update_time'
	];

	public function vm_property()
	{
		return $this->belongsTo(\App\Models\VmProperty::class, 'property_id');
	}

	public function coming_tips()
	{
		return $this->hasMany(\App\Models\ComingTip::class);
	}
}
