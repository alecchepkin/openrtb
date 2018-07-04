<?php
namespace OpenRTB;

use OpenRTB\Abstractions\ParentModel;

class BidResponse extends ParentModel {
  
  protected $attributes = array(
    'id' => array(
      'required' => true,
      'type' => self::ATTR_ID,
    ),
    'seatbid' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => 'OpenRTB\Models\SeatBid',
    ),
    'bidid' => array(
      'type' => self::ATTR_STRING,
    ),
    'cur' => array(
      'type' => self::ATTR_STRING,
      'default_value' => 'USD',
    ),
    'customdata' => array(
      'type' => self::ATTR_STRING,
    ),
    'nbr' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'ext' => array(
      'type' => 'OpenRTB\Models\Extension',
    ),
  );
  
  public function __constuct($reponse){
    
  }
    
}