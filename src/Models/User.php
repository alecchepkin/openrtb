<?php
namespace OpenRTB\Models;

use OpenRTB\Abstractions\BaseModel;

class User extends BaseModel {
  
	protected $attributes = array(
		'id' => array (
			'type' => self::ATTR_ID
		),
		'buyeruid' => array (
			'type' => self::ATTR_STRING
		),
		'yob' => array (
			'type' => self::ATTR_INTEGER
		),
		'gender' => array (
			'type' => self::ATTR_STRING
		),
		'keywords' => array (
			'type' => self::ATTR_STRING
		),
		'customdata' => array (
			'type' => self::ATTR_STRING
		),
		'geo' => array (
			'type' => 'OpenRTB\Models\Geo'
		),
		'data' => array (
			'type' => 'OpenRTB\Models\Data'
		),
		'ext' => array (
			'type' => 'OpenRTB\Models\Extension'
		),
	);
  
}