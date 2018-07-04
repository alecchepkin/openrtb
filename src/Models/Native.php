<?php
namespace OpenRTB\Models;

use OpenRTB\Abstractions\BaseModel;

class Native extends BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => self::ATTR_ID,
    ),
    'request' => array(
      'required' => true,
      'type' => self::ATTR_STRING,
    ),
    'ver' => array(
      'type' => self::ATTR_STRING,
    ),
    'battr' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_INTEGER,
    ),
    'api' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_INTEGER,
    ),
    'ext' => array(
      'type' => 'OpenRTB\Models\Extension',
    ),
  );
  
}