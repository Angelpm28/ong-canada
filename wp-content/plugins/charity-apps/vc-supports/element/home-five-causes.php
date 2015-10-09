<?php

return array(
    "name" => __("Causes Latest Donors", "charity"),
    "base" => "cause_latest_donors",
    "class" => "",
    "icon" => "icon-charity",
    "description" => "Donate and Join and See latest Donors",
    "category" => __('Charity Shortcodes', "charity"),
    "params" => array(
        array(
            'param_name' => 'cauese_latest_donor_custom_markup', // all params must have a unique name
            'type' => 'custom_markup', // this param type
            'description' => __('Select for Causes Latest Donor', 'charity'), // some description if needed
            'value' => '', // your custom markup
        ),
    )
);
