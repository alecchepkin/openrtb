<?php
namespace OpenRTB\Models;

use OpenRTB\Abstractions\BaseModel;

class Regulation extends BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => self::ATTR_ID,
    ),
    'coppa' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'ext' => array(
      'type' => 'OpenRTB\Models\Extension',
    ),
  );
  
}