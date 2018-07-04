<?php
namespace OpenRTB\Models;

use OpenRTB\Abstractions\BaseModel;

class Impression extends BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'required' => true,
      'type' => self::ATTR_ID,
    ),
    'banner' => array(
      'type' => 'OpenRTB\Models\Banner',
    ),
    'video' => array(
      'type' => 'OpenRTB\Models\Video',
    ),
    'native' => array(
      'type' => 'OpenRTB\Models\Video',
    ),
    'displaymanager' => array(
      'type' => self::ATTR_STRING,
    ),
    'displaymanagerver' => array(
      'type' => self::ATTR_STRING,
    ),
    'instl' => array(
      'type' => self::ATTR_INTEGER,
      'default_value' => 0,
    ),
    'tagid' => array(
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
    'secure' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'iframebuster' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'pmp' => array(
      'type' => 'OpenRTB\Models\PMP',
    ),
    'ext' => array(
      'type' => 'OpenRTB\Models\Extension',
    ),
  );
  
}