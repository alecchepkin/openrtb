<?php
namespace OpenRTB\Models;

use OpenRTB\Abstractions\BaseModel;

class Segment extends BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => self::ATTR_ID,
    ),
    'name' => array(
      'type' => self::ATTR_STRING,
    ),
    'value' => array(
      'type' => self::ATTR_STRING,
    ),
    'ext' => array(
      'type' => 'OpenRTB\Models\Extension',
    ),
  );
  
}