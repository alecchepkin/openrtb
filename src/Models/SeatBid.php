<?php
namespace OpenRTB\Models;

use OpenRTB\Abstractions\BaseModel;

class SeatBid extends BaseModel {
  
	protected $attributes = array(
		'bid' => array(
			'type' => self::ATTR_ARRAY,
			'sub_type' => 'OpenRTB\Models\Bid',
			'required' => true
		),
		'seat' => array(
			'type' => self::ATTR_STRING
		),
		'group' => array(
			'type' => self::ATTR_INTEGER,
			'default_value' => 0
		),
		'ext' => array(
			'type' => 'OpenRTB\Models\Extension'
		)
	);

}