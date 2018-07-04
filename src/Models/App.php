<?php
namespace OpenRTB\Models;

use OpenRTB\Abstractions\BaseModel;

class App extends BaseModel {
  
	protected $attributes = array(
		'id' => array(
			'type' => self::ATTR_ID
		),
		'name' => array(
			'type' => self::ATTR_STRING
		),
		'bundle' => array(
			'type' => self::ATTR_STRING
 		),
 		'domain' => array (
 			'type' => self::ATTR_STRING
 		),
 		'storeurl' => array(
 			'type' =>  self::ATTR_STRING
 		),
 		'cat' => array(
 			'type' =>  self::ATTR_ARRAY,
 			'sub_type' => self::ATTR_STRING
 		),
 		'sectioncat' => array(
 			'type' =>  self::ATTR_ARRAY,
 			'sub_type' => self::ATTR_STRING
 		),
 		'pagecat' => array(
 			'type' =>  self::ATTR_ARRAY,
 			'sub_type' => self::ATTR_STRING
 		),
 		'ver' => array(
 			'type' =>  self::ATTR_STRING
 		),
 		'privacypolicy' => array(
 			'type' =>  self::ATTR_INTEGER
 		),
 		'paid' => array(
 			'type' =>  self::ATTR_INTEGER
 		),
 		'publisher' => array(
 			'type' =>  'OpenRTB\Models\Publisher'
 		),
 		'content' => array(
 			'type' =>  'OpenRTB\Models\Content'
 		),
 		'keywords' => array(
 			'type' =>  self::ATTR_STRING
 		),
 		'ext' => array(
 			'type' =>  'OpenRTB\Models\Extension'
 		)
	);
  
}