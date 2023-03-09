<?php
/*
Plugin Name: Advanced Custom Fields - Hidden Field Type
Description: Adds a hidden field type to Advanced Custom Fields
Version: 1.0
Author: Shahzaib Khan
License: GPL2
*/

if (!defined('ABSPATH')) {
    exit;
}

class My_ACF_Fields
{
    public function __construct()
    {
        add_action('acf/include_field_types', array($this, 'include_field_types'));
    }

    public function include_field_types($version)
    {
        include_once('fields/class-my-acf-field-hidden.php');
    }
}

new My_ACF_Fields();