<?php

if(!defined('ABSPATH')) die ('No direct access allowed.');

class PSM_POBox_Labels 
{
  public function init() 
  {
    add_filter('woocommerce_default_address_fields', [$this, 'overrideFields']);
  }

  public function overrideFields($fields)
  {
    $fields['address_1']['label'] = 'Address 1 (no PO Boxes allowed)';
    $fields['address_2']['label'] = 'Address 2 (no PO Boxes allowed)';

    return $fields;
  }
}

?>