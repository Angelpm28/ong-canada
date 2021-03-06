<?php

return array(
    "name" => __("Causes Donors List", "charity"),
    "base" => "causes_donors_list",
    "class" => "",
    "icon" => "icon-charity",
    "description" => "Donate and See Donors",
    "category" => __('Charity Shortcodes', "charity"),
    "params" => array(
        array(
            'param_name' => 'cauese_donor_list_custom_markup', // all params must have a unique name
            'type' => 'custom_markup', // this param type
            'description' => __('Select for Causes Donor List', 'charity'), // some description if needed
            'value' => '', // your custom markup
        ),
    )
);
