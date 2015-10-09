<?php

return array(
    "name" => __("Meet our team", "charity"),
    "base" => "meet_team",
    "class" => "",
    "icon" => "icon-charity",
    "description" => "Place meet our team",
    "category" => __('Charity Shortcodes', "charity"),
    "params" => array(
        array(
            'param_name' => 'meet_team_custom_markup', // all params must have a unique name
            'type' => 'custom_markup', // this param type
            'description' => __('Select for meet our team', 'charity'), // some description if needed
            'value' => '', // your custom markup
        ),
    )
);
