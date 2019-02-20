<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ArrowLineMap
 *
 * @property int $id
 * @property int $arrow_id
 * @property int $line_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @property \App\Models\Arrow $arrow
 * @property \App\Models\VmLinespec $vm_linespec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArrowLineMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArrowLineMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArrowLineMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArrowLineMap whereArrowId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArrowLineMap whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArrowLineMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArrowLineMap whereLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArrowLineMap whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArrowLineMap whereUpdateTime($value)
 */
	class ArrowLineMap extends \Eloquent {}
}

namespace App\Models{
/**
 * Class BusinessZone
 *
 * @property int $id
 * @property int $zone_index
 * @property string $name
 * @property int $property_id
 * @property int $gate_id
 * @property int $type_id
 * @property int $parent_id
 * @property int $business_type_id
 * @property string $map_url
 * @property string $description
 * @property int $status_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmProperty $vm_property
 * @property \Illuminate\Database\Eloquent\Collection $business_sale_records
 * @property \Illuminate\Database\Eloquent\Collection $business_zone_maps
 * @property \Illuminate\Database\Eloquent\Collection $heatmaps
 * @property \App\Models\Pathflow $pathflow
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone whereBusinessTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone whereGateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone whereMapUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZone whereZoneIndex($value)
 */
	class BusinessZone extends \Eloquent {}
}

namespace App\Models{
/**
 * Class LinecountingRecord
 *
 * @property int $id
 * @property int $line_id
 * @property int $enter_num
 * @property int $exit_num
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmLinespec $vm_linespec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingRecord whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingRecord whereEnterNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingRecord whereExitNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingRecord whereLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingRecord whereUpdateTime($value)
 */
	class LinecountingRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * Class LinecountingDeltum
 *
 * @property int $id
 * @property int $line_id
 * @property int $exit_delta
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmLinespec $vm_linespec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingDeltum newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingDeltum newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingDeltum query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingDeltum whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingDeltum whereExitDelta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingDeltum whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingDeltum whereLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LinecountingDeltum whereUpdateTime($value)
 */
	class LinecountingDeltum extends \Eloquent {}
}

namespace App\Models{
/**
 * Class VmCamera
 *
 * @property int $id
 * @property string $name
 * @property string $stream_url
 * @property string $screen_capture
 * @property float $position_x
 * @property float $position_y
 * @property float $direction_angle
 * @property bool $enabled
 * @property int $property_id
 * @property int $algo_parameter_id
 * @property string $management_url
 * @property string $capture_host
 * @property string $extra_parameter
 * @property string $capture_dir
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmAlgoParameter $vm_algo_parameter
 * @property \Illuminate\Database\Eloquent\Collection $dwell_zone_camera_maps
 * @property \App\Models\VmCameraPictureCollect $vm_camera_picture_collect
 * @property \Illuminate\Database\Eloquent\Collection $vm_linespecs
 * @property \Illuminate\Database\Eloquent\Collection $vm_polygonspecs
 * @property \Illuminate\Database\Eloquent\Collection $zone_camera_maps
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereAlgoParameterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereCaptureDir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereCaptureHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereDirectionAngle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereExtraParameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereManagementUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera wherePositionX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera wherePositionY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereScreenCapture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereStreamUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCamera whereUpdateTime($value)
 */
	class VmCamera extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ZoneLineMap
 *
 * @property int $zone_id
 * @property int $line_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @property \App\Models\VmLinespec $vm_linespec
 * @property \App\Models\Zone $zone
 * @package App\Models
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneLineMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneLineMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneLineMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneLineMap whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneLineMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneLineMap whereLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneLineMap whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneLineMap whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneLineMap whereZoneId($value)
 */
	class ZoneLineMap extends \Eloquent {}
}

namespace App\Models{
/**
 * Class VmProperty
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property int $business_zone_id
 * @property string $map_url
 * @property string $longitude
 * @property string $latitude
 * @property string $province
 * @property string $city
 * @property string $address
 * @property float $area
 * @property \Carbon\Carbon $daily_start
 * @property \Carbon\Carbon $daily_end
 * @property string $weekday
 * @property string $time_zone
 * @property string $description
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @property \App\Models\BusinessZone $business_zone
 * @property \App\Models\Company $company
 * @property \Illuminate\Database\Eloquent\Collection $business_zones
 * @property \Illuminate\Database\Eloquent\Collection $property_infos
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereDailyEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereDailyStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereMapUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereTimeZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmProperty whereWeekday($value)
 */
	class VmProperty extends \Eloquent {}
}

namespace App\Models{
/**
 * Class AgenderRecord
 *
 * @property int $id
 * @property int $line_id
 * @property int $is_enter
 * @property int $age
 * @property int $is_male
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmLinespec $vm_linespec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AgenderRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AgenderRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AgenderRecord query()
 */
	class AgenderRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * Class LineAgenderRecord
 *
 * @property int $id
 * @property int $line_id
 * @property bool $is_enter
 * @property int $age
 * @property int $age_max
 * @property bool $is_male
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmLinespec $vm_linespec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LineAgenderRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LineAgenderRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LineAgenderRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LineAgenderRecord whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LineAgenderRecord whereAgeMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LineAgenderRecord whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LineAgenderRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LineAgenderRecord whereIsEnter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LineAgenderRecord whereIsMale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LineAgenderRecord whereLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LineAgenderRecord whereUpdateTime($value)
 */
	class LineAgenderRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * Class VmLinespec
 *
 * @property int $id
 * @property string $name
 * @property int $camera_id
 * @property string $specification
 * @property int $type_id
 * @property string $extra_parameter
 * @property bool $enabled
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmCamera $vm_camera
 * @property \Illuminate\Database\Eloquent\Collection $agender_records
 * @property \Illuminate\Database\Eloquent\Collection $arrow_line_maps
 * @property \Illuminate\Database\Eloquent\Collection $gate_line_maps
 * @property \Illuminate\Database\Eloquent\Collection $linecounting_delta
 * @property \Illuminate\Database\Eloquent\Collection $linecounting_records
 * @property \Illuminate\Database\Eloquent\Collection $zone_line_maps
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespec newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespec newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespec query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespec whereCameraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespec whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespec whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespec whereExtraParameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespec whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespec whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespec whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespec whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespec whereUpdateTime($value)
 */
	class VmLinespec extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ZoneGateMap
 *
 * @property int $zone_id
 * @property int $gate_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @property \App\Models\Gate $gate
 * @property \App\Models\Zone $zone
 * @package App\Models
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneGateMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneGateMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneGateMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneGateMap whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneGateMap whereGateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneGateMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneGateMap whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneGateMap whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneGateMap whereZoneId($value)
 */
	class ZoneGateMap extends \Eloquent {}
}

namespace App\Models{
/**
 * Class UploadLog
 *
 * @property int $id
 * @property \Carbon\Carbon $create_time
 * @property string $host_name
 * @property string $module_name
 * @property string $log_cloud_path
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UploadLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UploadLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UploadLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UploadLog whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UploadLog whereHostName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UploadLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UploadLog whereLogCloudPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UploadLog whereModuleName($value)
 */
	class UploadLog extends \Eloquent {}
}

namespace App\Models{
/**
 * Class QueuecountRecord
 *
 * @property int $id
 * @property int $polygon_id
 * @property \Carbon\Carbon $timestamp
 * @property int $counting
 * @property \Carbon\Carbon $update_time
 * @property \Carbon\Carbon $create_time
 * @property \App\Models\VmPolygonspec $vm_polygonspec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuecountRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuecountRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuecountRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuecountRecord whereCounting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuecountRecord whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuecountRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuecountRecord wherePolygonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuecountRecord whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuecountRecord whereUpdateTime($value)
 */
	class QueuecountRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PropertyInfo
 *
 * @property int $id
 * @property int $property_id
 * @property int $sale_target_1
 * @property int $sale_target_2
 * @property int $sale_target_3
 * @property int $sale_target_4
 * @property int $sale_target_5
 * @property int $sale_target_6
 * @property int $sale_target_7
 * @property int $sale_target_8
 * @property int $sale_target_9
 * @property int $sale_target_10
 * @property int $sale_target_11
 * @property int $sale_target_12
 * @property int $flow_target_1
 * @property int $flow_target_2
 * @property int $flow_target_3
 * @property int $flow_target_4
 * @property int $flow_target_5
 * @property int $flow_target_6
 * @property int $flow_target_7
 * @property int $flow_target_8
 * @property int $flow_target_9
 * @property int $flow_target_10
 * @property int $flow_target_11
 * @property int $flow_target_12
 * @property string $description
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @property \App\Models\VmProperty $vm_property
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereFlowTarget1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereFlowTarget10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereFlowTarget11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereFlowTarget12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereFlowTarget2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereFlowTarget3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereFlowTarget4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereFlowTarget5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereFlowTarget6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereFlowTarget7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereFlowTarget8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereFlowTarget9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereSaleTarget1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereSaleTarget10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereSaleTarget11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereSaleTarget12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereSaleTarget2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereSaleTarget3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereSaleTarget4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereSaleTarget5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereSaleTarget6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereSaleTarget7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereSaleTarget8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereSaleTarget9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyInfo whereUpdateTime($value)
 */
	class PropertyInfo extends \Eloquent {}
}

namespace App\Models{
/**
 * Class DwellMatchRecord
 *
 * @property int $id
 * @property int $line_id
 * @property int $track_id
 * @property bool $is_enter
 * @property int $object_id
 * @property float $score
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmLinespec $vm_linespec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellMatchRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellMatchRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellMatchRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellMatchRecord whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellMatchRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellMatchRecord whereIsEnter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellMatchRecord whereLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellMatchRecord whereObjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellMatchRecord whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellMatchRecord whereTrackId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellMatchRecord whereUpdateTime($value)
 */
	class DwellMatchRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * Class CheckoutRecord
 *
 * @property int $id
 * @property int $polygon_id
 * @property \Carbon\Carbon $timestamp
 * @property \Carbon\Carbon $start_time
 * @property \Carbon\Carbon $end_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmPolygonspec $vm_polygonspec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CheckoutRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CheckoutRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CheckoutRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CheckoutRecord whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CheckoutRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CheckoutRecord wherePolygonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CheckoutRecord whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CheckoutRecord whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CheckoutRecord whereUpdateTime($value)
 */
	class CheckoutRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * Class VmAlgoParameterHistory
 *
 * @property int $id
 * @property string $name
 * @property string $algo_type
 * @property string $algo_resolution
 * @property \Carbon\Carbon $daily_start
 * @property \Carbon\Carbon $daily_end
 * @property string $capture_type
 * @property int $capture_inteval_sec
 * @property int $media_keep_hours
 * @property string $algo_config_json_str
 * @property string $message_queue_url
 * @property string $extra_parameter
 * @property bool $upload_cloud
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $history_time
 * @property string $history_action
 * @property int $mem_cost_mb
 * @property float $cpu_cost
 * @property float $gpu_cost
 * @property int $worker_number
 * @property \Carbon\Carbon $update_time
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereAlgoConfigJsonStr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereAlgoResolution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereAlgoType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereCaptureIntevalSec($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereCaptureType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereCpuCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereDailyEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereDailyStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereExtraParameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereGpuCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereHistoryAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereHistoryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereMediaKeepHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereMemCostMb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereMessageQueueUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereUploadCloud($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameterHistory whereWorkerNumber($value)
 */
	class VmAlgoParameterHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class BusinessZoneMap
 *
 * @property int $id
 * @property int $business_zone_id
 * @property int $zone_id
 * @property int $status_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\Zone $zone
 * @property \App\Models\BusinessZone $business_zone
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZoneMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZoneMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZoneMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZoneMap whereBusinessZoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZoneMap whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZoneMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZoneMap whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZoneMap whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessZoneMap whereZoneId($value)
 */
	class BusinessZoneMap extends \Eloquent {}
}

namespace App\Models{
/**
 * Class VmCameraPictureCollect
 *
 * @property int $id
 * @property int $camera_id
 * @property int $capture_status
 * @property string $remark
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmCamera $vm_camera
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraPictureCollect newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraPictureCollect newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraPictureCollect query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraPictureCollect whereCameraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraPictureCollect whereCaptureStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraPictureCollect whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraPictureCollect whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraPictureCollect whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraPictureCollect whereUpdateTime($value)
 */
	class VmCameraPictureCollect extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Company
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property \Carbon\Carbon $daily_start
 * @property \Carbon\Carbon $daily_end
 * @property string $weekday
 * @property int $status_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \Illuminate\Database\Eloquent\Collection $vm_properties
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereDailyEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereDailyStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereWeekday($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
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
 * @property \App\Models\VmLinespec $vm_linespec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord whereAgeMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord whereAvatarUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord whereComingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord whereCustomerObjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord whereIsEnter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord whereIsFront($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord whereIsmale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord whereSimilarityScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingRecord whereVmLinespecId($value)
 */
	class ComingRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Pathflow
 *
 * @property int $id
 * @property int $business_zone_id
 * @property string $pathflow_pic
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\BusinessZone $business_zone
 * @property \Illuminate\Database\Eloquent\Collection $arrowgroups
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pathflow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pathflow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pathflow query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pathflow whereBusinessZoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pathflow whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pathflow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pathflow wherePathflowPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pathflow whereUpdateTime($value)
 */
	class Pathflow extends \Eloquent {}
}

namespace App\Models{
/**
 * Class DwellZoneCameraMap
 *
 * @property int $id
 * @property int $zone_id
 * @property int $camera_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmCamera $vm_camera
 * @property \App\Models\Zone $zone
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellZoneCameraMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellZoneCameraMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellZoneCameraMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellZoneCameraMap whereCameraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellZoneCameraMap whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellZoneCameraMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellZoneCameraMap whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellZoneCameraMap whereZoneId($value)
 */
	class DwellZoneCameraMap extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Report
 *
 * @property int $id
 * @property int $property_id
 * @property string $report_url
 * @property int $time_range
 * @property int $space_type
 * @property int $report_type
 * @property string $date
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report whereReportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report whereReportUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report whereSpaceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report whereTimeRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Report whereUpdateTime($value)
 */
	class Report extends \Eloquent {}
}

namespace App\Models{
/**
 * Class UserLog
 *
 * @property int $id
 * @property int $user_id
 * @property \Carbon\Carbon $login_time
 * @property \Carbon\Carbon $logout_time
 * @property string $operate_model
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLog whereLoginTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLog whereLogoutTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLog whereOperateModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLog whereUserId($value)
 */
	class UserLog extends \Eloquent {}
}

namespace App\Models{
/**
 * Class BusinessMonitor
 *
 * @property int $id
 * @property string $monitor_assign
 * @property string $monitor_sql
 * @property int $interval_time
 * @property \Carbon\Carbon $created_time
 * @property string $email_receivers
 * @property string $wechat_receivers
 * @property int $delete_flag
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessMonitor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessMonitor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessMonitor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessMonitor whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessMonitor whereDeleteFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessMonitor whereEmailReceivers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessMonitor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessMonitor whereIntervalTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessMonitor whereMonitorAssign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessMonitor whereMonitorSql($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessMonitor whereWechatReceivers($value)
 */
	class BusinessMonitor extends \Eloquent {}
}

namespace App\Models{
/**
 * Class GateLineMap
 *
 * @property int $gate_id
 * @property int $line_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @property int $id
 * @property \App\Models\Gate $gate
 * @property \App\Models\VmLinespec $vm_linespec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GateLineMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GateLineMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GateLineMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GateLineMap whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GateLineMap whereGateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GateLineMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GateLineMap whereLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GateLineMap whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GateLineMap whereUpdateTime($value)
 */
	class GateLineMap extends \Eloquent {}
}

namespace App\Models{
/**
 * Class VmHistory
 *
 * @property int $id
 * @property int $user_id
 * @property string $operation_table
 * @property string $operation_type
 * @property string $log
 * @property \Carbon\Carbon $history_time
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmHistory whereHistoryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmHistory whereLog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmHistory whereOperationTable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmHistory whereOperationType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmHistory whereUserId($value)
 */
	class VmHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class VmLinespecHistory
 *
 * @property int $id
 * @property string $name
 * @property int $camera_id
 * @property string $specification
 * @property int $type_id
 * @property string $extra_parameter
 * @property bool $enabled
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \Carbon\Carbon $history_time
 * @property string $history_action
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory whereCameraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory whereExtraParameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory whereHistoryAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory whereHistoryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmLinespecHistory whereUpdateTime($value)
 */
	class VmLinespecHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class DashboardUser
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string $email
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $api_token
 * @property int $company_id
 * @property string $last_page
 * @property string $permission
 * @property string $real_name
 * @property bool $is_male
 * @property int $level_id
 * @property string $avatar
 * @property string $property_id_list
 * @property string $phone
 * @property string $address
 * @property int $creator_id
 * @property int $status_id
 * @property string $remark
 * @property int $age
 * @package App\Models
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereApiToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereIsMale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereLastPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser wherePermission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser wherePropertyIdList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereRealName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DashboardUser whereUpdatedAt($value)
 */
	class DashboardUser extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ZonePolygonMap
 *
 * @property int $zone_id
 * @property int $polygon_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @property \App\Models\VmPolygonspec $vm_polygonspec
 * @property \App\Models\Zone $zone
 * @package App\Models
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZonePolygonMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZonePolygonMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZonePolygonMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZonePolygonMap whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZonePolygonMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZonePolygonMap wherePolygonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZonePolygonMap whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZonePolygonMap whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZonePolygonMap whereZoneId($value)
 */
	class ZonePolygonMap extends \Eloquent {}
}

namespace App\Models{
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
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory whereCameraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory whereExtraParameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory whereHistoryAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory whereHistoryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspecHistory whereZoneId($value)
 */
	class VmPolygonspecHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Heatmap
 *
 * @property int $id
 * @property int $business_zone_id
 * @property string $heatmap_url
 * @property int $time_range
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\BusinessZone $business_zone
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heatmap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heatmap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heatmap query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heatmap whereBusinessZoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heatmap whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heatmap whereHeatmapUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heatmap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heatmap whereTimeRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heatmap whereUpdateTime($value)
 */
	class Heatmap extends \Eloquent {}
}

namespace App\Models{
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
 * @property \App\Models\Arrowgroup $arrowgroup
 * @property \Illuminate\Database\Eloquent\Collection $arrow_line_maps
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow whereAngle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow whereArrowgroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow whereIspathby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow wherePositionX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow wherePositionY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrow whereUpdateTime($value)
 */
	class Arrow extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PolygoncountingRecord
 *
 * @property int $id
 * @property int $polygon_id
 * @property int $enter_num
 * @property int $exit_num
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmPolygonspec $vm_polygonspec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygoncountingRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygoncountingRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygoncountingRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygoncountingRecord whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygoncountingRecord whereEnterNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygoncountingRecord whereExitNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygoncountingRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygoncountingRecord wherePolygonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygoncountingRecord whereUpdateTime($value)
 */
	class PolygoncountingRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * Class VmAlgoParameter
 *
 * @property int $id
 * @property string $name
 * @property string $algo_type
 * @property string $algo_resolution
 * @property \Carbon\Carbon $daily_start
 * @property \Carbon\Carbon $daily_end
 * @property string $capture_type
 * @property float $capture_inteval_sec
 * @property int $media_keep_hours
 * @property string $message_queue_url
 * @property string $algo_config_json_str
 * @property string $extra_parameter
 * @property bool $upload_cloud
 * @property int $mem_cost_mb
 * @property float $cpu_cost
 * @property float $gpu_cost
 * @property int $worker_number
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \Illuminate\Database\Eloquent\Collection $vm_cameras
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereAlgoConfigJsonStr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereAlgoResolution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereAlgoType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereCaptureIntevalSec($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereCaptureType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereCpuCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereDailyEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereDailyStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereExtraParameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereGpuCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereMediaKeepHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereMemCostMb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereMessageQueueUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereUploadCloud($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmAlgoParameter whereWorkerNumber($value)
 */
	class VmAlgoParameter extends \Eloquent {}
}

namespace App\Models{
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
 * @property \App\Models\Gate $gate
 * @property \App\Models\Pathflow $pathflow
 * @property \Illuminate\Database\Eloquent\Collection $arrows
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrowgroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrowgroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrowgroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrowgroup whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrowgroup whereGateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrowgroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrowgroup whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrowgroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrowgroup wherePathflowId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrowgroup whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Arrowgroup whereUpdateTime($value)
 */
	class Arrowgroup extends \Eloquent {}
}

namespace App\Models{
/**
 * Class History
 *
 * @property int $id
 * @property int $operator_id
 * @property \Carbon\Carbon $operated_time
 * @property string $operate_sql
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\History newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\History newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\History query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\History whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\History whereOperateSql($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\History whereOperatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\History whereOperatorId($value)
 */
	class History extends \Eloquent {}
}

namespace App\Models{
/**
 * Class CustomerHistory
 *
 * @property int $id
 * @property \Carbon\Carbon $update_time
 * @property int $type
 * @property int $customer_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustomerHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustomerHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustomerHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustomerHistory whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustomerHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustomerHistory whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustomerHistory whereUpdateTime($value)
 */
	class CustomerHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class DwellTime
 *
 * @property int $id
 * @property int $type_id
 * @property int $model_id
 * @property int $dwell_time
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTime query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTime whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTime whereDwellTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTime whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTime whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTime whereUpdateTime($value)
 */
	class DwellTime extends \Eloquent {}
}

namespace App\Models{
/**
 * Class TypeDic
 *
 * @property int $id
 * @property string $model
 * @property string $name
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeDic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeDic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeDic query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeDic whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeDic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeDic whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeDic whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeDic whereUpdateTime($value)
 */
	class TypeDic extends \Eloquent {}
}

namespace App\Models{
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
 * @property \App\Models\Customer $customer
 * @property \App\Models\VmLinespec $vm_linespec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingTip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingTip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingTip query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingTip whereAvatarUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingTip whereComingCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingTip whereComingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingTip whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingTip whereDelUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingTip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingTip whereReadStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingTip whereSimilarityScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComingTip whereVmLinespecId($value)
 */
	class ComingTip extends \Eloquent {}
}

namespace App\Models{
/**
 * Class BusinessSaleRecord
 *
 * @property int $id
 * @property int $business_zone_id
 * @property int $people
 * @property int $sale
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\BusinessZone $business_zone
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessSaleRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessSaleRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessSaleRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessSaleRecord whereBusinessZoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessSaleRecord whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessSaleRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessSaleRecord wherePeople($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessSaleRecord whereSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BusinessSaleRecord whereUpdateTime($value)
 */
	class BusinessSaleRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Gate
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $status_id
 * @property string $arrow_specification
 * @property float $position_x
 * @property float $position_y
 * @property int $gate_index
 * @property string $gate_map_url
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \Illuminate\Database\Eloquent\Collection $arrowgroups
 * @property \Illuminate\Database\Eloquent\Collection $gate_line_maps
 * @property \Illuminate\Database\Eloquent\Collection $zones
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate whereArrowSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate whereGateIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate whereGateMapUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate wherePositionX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate wherePositionY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gate whereUpdateTime($value)
 */
	class Gate extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ZoneCameraMap
 *
 * @property int $zone_id
 * @property int $camera_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @property \App\Models\VmCamera $vm_camera
 * @property \App\Models\Zone $zone
 * @package App\Models
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCameraMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCameraMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCameraMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCameraMap whereCameraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCameraMap whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCameraMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCameraMap whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCameraMap whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCameraMap whereZoneId($value)
 */
	class ZoneCameraMap extends \Eloquent {}
}

namespace App\Models{
/**
 * Class QueuePolygonMap
 *
 * @property int $id
 * @property int $queue_id
 * @property int $polygon_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @property \App\Models\Queue $queue
 * @property \App\Models\VmPolygonspec $vm_polygonspec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuePolygonMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuePolygonMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuePolygonMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuePolygonMap whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuePolygonMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuePolygonMap wherePolygonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuePolygonMap whereQueueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuePolygonMap whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QueuePolygonMap whereUpdateTime($value)
 */
	class QueuePolygonMap extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PolygontouchRecord
 *
 * @property int $id
 * @property int $polygon_id
 * @property int $touch_num
 * @property \Carbon\Carbon $created_time
 * @property \Carbon\Carbon $update_time
 * @property \App\Models\VmPolygonspec $vm_polygonspec
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygontouchRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygontouchRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygontouchRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygontouchRecord whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygontouchRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygontouchRecord wherePolygonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygontouchRecord whereTouchNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PolygontouchRecord whereUpdateTime($value)
 */
	class PolygontouchRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * Class VmCameraHistory
 *
 * @property int $id
 * @property string $name
 * @property string $stream_url
 * @property string $screen_capture
 * @property float $position_x
 * @property float $position_y
 * @property float $direction_angle
 * @property bool $enabled
 * @property int $property_id
 * @property int $algo_parameter_id
 * @property string $capture_host
 * @property string $extra_parameter
 * @property string $capture_dir
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \Carbon\Carbon $history_time
 * @property string $history_action
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereAlgoParameterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereCaptureDir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereCaptureHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereDirectionAngle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereExtraParameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereHistoryAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereHistoryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory wherePositionX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory wherePositionY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereScreenCapture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereStreamUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmCameraHistory whereUpdateTime($value)
 */
	class VmCameraHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class HolidayEvent
 *
 * @property int $id
 * @property string $name
 * @property int $type_id
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $end_date
 * @property string $description
 * @property \Carbon\Carbon $creat_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HolidayEvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HolidayEvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HolidayEvent query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HolidayEvent whereCreatTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HolidayEvent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HolidayEvent whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HolidayEvent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HolidayEvent whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HolidayEvent whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HolidayEvent whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HolidayEvent whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HolidayEvent whereUpdateTime($value)
 */
	class HolidayEvent extends \Eloquent {}
}

namespace App\Models{
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
 * @property \App\Models\VmProperty $vm_property
 * @property \Illuminate\Database\Eloquent\Collection $coming_tips
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereAgeMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereAvatarUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereCustomerObjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereFeatureUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereIsmale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereUpdateTime($value)
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * Class DwellTimeAllperson
 *
 * @property int $id
 * @property int $re_id
 * @property int $dwell_time
 * @property int $re_id_count
 * @property int $type_id
 * @property int $model_id
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTimeAllperson newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTimeAllperson newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTimeAllperson query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTimeAllperson whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTimeAllperson whereDwellTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTimeAllperson whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTimeAllperson whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTimeAllperson whereReId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTimeAllperson whereReIdCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTimeAllperson whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DwellTimeAllperson whereUpdateTime($value)
 */
	class DwellTimeAllperson extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Zone
 *
 * @property int $id
 * @property string $name
 * @property string $position
 * @property float $area
 * @property int $type_id
 * @property int $element_type
 * @property string $specification
 * @property string $rect_pos
 * @property string $description
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property int $status_id
 * @property \Illuminate\Database\Eloquent\Collection $business_zones
 * @property \Illuminate\Database\Eloquent\Collection $business_zone_maps
 * @property \Illuminate\Database\Eloquent\Collection $dwell_times
 * @property \Illuminate\Database\Eloquent\Collection $dwell_zone_camera_maps
 * @property \Illuminate\Database\Eloquent\Collection $zone_camera_maps
 * @property \Illuminate\Database\Eloquent\Collection $gates
 * @property \Illuminate\Database\Eloquent\Collection $zone_line_maps
 * @property \Illuminate\Database\Eloquent\Collection $zone_polygon_maps
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone whereElementType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone whereRectPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Zone whereUpdateTime($value)
 */
	class Zone extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Queue
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property bool $enabled
 * @property string $type
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property \Illuminate\Database\Eloquent\Collection $queue_polygon_maps
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Queue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Queue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Queue query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Queue whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Queue whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Queue whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Queue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Queue whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Queue whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Queue whereUpdateTime($value)
 */
	class Queue extends \Eloquent {}
}

namespace App\Models{
/**
 * Class VmPolygonspec
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
 * @property \App\Models\VmCamera $vm_camera
 * @property \Illuminate\Database\Eloquent\Collection $checkout_records
 * @property \Illuminate\Database\Eloquent\Collection $polygoncounting_records
 * @property \Illuminate\Database\Eloquent\Collection $queue_polygon_maps
 * @property \Illuminate\Database\Eloquent\Collection $zone_polygon_maps
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspec newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspec newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspec query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspec whereCameraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspec whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspec whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspec whereExtraParameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspec whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspec whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspec whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspec whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VmPolygonspec whereZoneId($value)
 */
	class VmPolygonspec extends \Eloquent {}
}

