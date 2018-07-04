<?php
namespace OpenRTB\Models;

use OpenRTB\Abstractions\BaseModel;

class Deal extends BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'required' => true,
      'type' => self::ATTR_STRING,
    ),
    'bidfloor' => array(
      'type' => self::ATTR_FLOAT,
      'default_value' => 0.0,
    ),
    'bidfloorcur' => array(
      'type' => self::ATTR_STRING,
      'default_value' => 'USD',
    ),
    'at' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'wseat' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'wadomain' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'ext' => array(
      'type' => 'OpenRTB\Models\Extension',
    ),
  );
  
}