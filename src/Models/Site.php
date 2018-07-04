<?php
namespace OpenRTB\Models;

use OpenRTB\Abstractions\BaseModel;

class Site extends BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => self::ATTR_ID,
    ),
    'name' => array(
      'type' => self::ATTR_STRING,
    ),
    'domain' => array(
      'type' => self::ATTR_STRING,
    ),
    'cat' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'sectioncat' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'pagecat' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'page' => array(
      'type' => self::ATTR_STRING,
    ),
    'ref' => array(
      'type' => self::ATTR_STRING,
    ),
    'search' => array(
      'type' => self::ATTR_STRING,
    ),
    'mobile' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'privacypolicy' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'publisher' => array(
      'type' => 'OpenRTB\Models\Publisher',
    ),
    'content' => array(
      'type' => 'OpenRTB\Models\Content',
    ),
    'keywords' => array(
      'type' => self::ATTR_STRING,
    ),
    'ext' => array(
      'type' => 'OpenRTB\Models\Extension',
    ),
  );
  
}