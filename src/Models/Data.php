<?php
namespace OpenRTB\Models;

use OpenRTB\Abstractions\BaseModel;

class Data extends BaseModel {
  
	protected $attributes = array(
		'id' => array (
			'type' => self::ATTR_ID
		),
		'name' => array (
			'type' => self::ATTR_STRING
		),
		'segment' => array (
			'type' => self::ATTR_ARRAY,
			'sub_type' => 'OpenRTB\Models\Segment'
		),
		'ext' => array (
			'type' => 'OpenRTB\Models\Extension'
		),
	);
  
}