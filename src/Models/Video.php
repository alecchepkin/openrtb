<?php
namespace OpenRTB\Models;

use OpenRTB\Abstractions\BaseModel;

class Video extends BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => self::ATTR_ID,
    ),
    'w' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'h' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'mimes' => array(
      'required' => true,
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'minduration' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'maxduration' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'protocol' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'protocols' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_INTEGER,
    ),
    'startdelay' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'linearity' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'sequence' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'battr' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_INTEGER,
    ),
    'maxextended' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'minbitrate' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'maxbitrate' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'boxingallowed' => array(
      'type' => self::ATTR_INTEGER,
      'default_value' => 1,
    ),
    'playbackmethod' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_INTEGER,
    ),
    'delivery' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_INTEGER,
    ),
    'pos' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'companionad' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => 'OpenRTB\Models\Banner',
    ),
    'companiontype' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => 'OpenRTB\Models\Banner',
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