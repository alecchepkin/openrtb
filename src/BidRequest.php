<?php
namespace OpenRTB;

use OpenRTB\Abstractions\BaseModel;

class BidRequest extends BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'required' => true,
      'type' => self::ATTR_ID,
    ),
    'imp' => array(
      'required' => true,
      'type' => self::ATTR_ARRAY,
      'sub_type' => 'OpenRTB\Models\Impression'
    ),
    'app' => array(
      'type' => 'OpenRTB\Models\App',
    ),
    'device' => array(
      'type' => 'OpenRTB\Models\Device',
    ),
    'user' => array(
      'type' => 'OpenRTB\Models\User',
    ),
    'test' => array(
      'type' => self::ATTR_INTEGER,
      'default_value' => 0,
    ),
    'at' => array(
      'type' => self::ATTR_INTEGER,
      'default_value' => 2,
    ),
    'tmax' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'wseat' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'allimps' => array(
      'type' => self::ATTR_INTEGER,
      'default_value' => 0,
    ),
    'cur' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING
    ),
    'bcat' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'badv' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'regs' => array(
      'type' => 'OpenRTB\Models\Regulation',
    ),
    'ext' => array(
      'type' => 'OpenRTB\Models\Extension',
    ),
  );
  
}