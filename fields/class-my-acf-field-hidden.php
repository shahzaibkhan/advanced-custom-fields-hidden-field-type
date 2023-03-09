<?php

class My_ACF_Field_Hidden extends acf_field
{
    public function __construct()
    {
        $this->name = 'hidden';
        $this->label = __('Hidden', 'acf');
        $this->category = 'basic';
        $this->defaults = array(
            'default_value' => '',
        );
        parent::__construct();
    }

    public function input_admin_enqueue_scripts()
    {
        wp_enqueue_style('acf-hidden-css', plugin_dir_url(__FILE__) . 'css/input.css');
    }

    public function input_admin($field)
    {
        echo '<input type="hidden" name="' . esc_attr($field['name']) . '" value="' . esc_attr($field['value']) . '">';
    }
}

new My_ACF_Field_Hidden();

