<?php

return array(
    "name" => __("Donate Now", "charity"),
    "base" => "donate_now",
    "class" => "",
    "icon" => "icon-charity",
    "description" => "Add donote now button",
    "category" => __('Charity Shortcodes', "charity"),
    "params" => array(
        array(
            'param_name' => 'donate_now_custom_markup', // all params must have a unique name
            'type' => 'custom_markup', // this param type
            'description' => __('Select for Donate Now', 'charity'), // some description if needed
            'value' => '', // your custom markup
        ),
    )
);
