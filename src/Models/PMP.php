<?php
namespace OpenRTB\Models;

use OpenRTB\Abstractions\BaseModel;

class PMP extends BaseModel {
  
	protected $attributes = array(
		'private_auction' => array(
			'type' => self::ATTR_INTEGER
		),
		'deals' => array(
			'type' => self::ATTR_ARRAY,
			'sub_type' => 'OpenRTB\Models\Deal'
		),
		'ext' => array(
			'type' => 'OpenRTB\Models\Extension'
		)
	);
  
}