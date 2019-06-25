<?php

if(!defined('ABSPATH')) die ('No direct access allowed.');

class PSM_POBox_Labels 
{
  public function init() 
  {
    add_filter('woocommerce_checkout_fields', [$this, 'overrideFields']);
  }

  public function overrideFields($fields)
  {
    $fields['billing']['billing_address_1']['label'] = 'Address 1 (no PO Boxes allowed)';
    $fields['billing']['billing_address_2']['label'] = 'Address 2 (no PO Boxes allowed)';
    $fields['shipping']['shipping_address_1']['label'] = 'Address 1 (no PO Boxes allowed)';
    $fields['shipping']['shipping_address_2']['label'] = 'Address 2 (no PO Boxes allowed)';

    return $fields;
  }
}

?>