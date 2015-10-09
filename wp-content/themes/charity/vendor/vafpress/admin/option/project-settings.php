<?php

return array(
    array(
        'type' => 'section',
        'title' => __('Project Layout', 'charity'),
        'name' => 'project_layout_settings',
        'description' => __('Project Layout Settings With all Possible Options To Perform Changes', 'charity'),
        'fields' => array(
            array(
                'type' => 'radioimage',
                'name' => 'charity-project-layout',
                'label' => __('Choose Any Project Layout Here', 'charity'),
                'description' => __('Select Here Project Layout', 'charity'),
                'items' => array(
                    array(
                        'value' => 'without-sidebar',
                        'label' => __('Project WithOut SideBar', 'charity'),
                        'img' => CHY_THEME_URL . '/assets/img/project.png',
                    ),
                    array(
                        'value' => 'sidebar',
                        'label' => __('Project WithSideBar', 'charity'),
                        'img' => CHY_THEME_URL . '/assets/img/project-withsidebar.png',
                    ),
                ),
            ),
        ),
    ),
    array(
        'type' => 'section',
        'title' => __('Project Single Layout', 'charity'),
        'name' => 'project_single_layout_settings',
        'description' => __('Project Single Layout Settings With all Possible Options To Perform Changes', 'charity'),
        'fields' => array(
            array(
                'type' => 'radioimage',
                'name' => 'charity-project-single-layout',
                'label' => __('Choose Any Project Single Layout Here', 'charity'),
                'description' => __('Select Here Project Single Layout', 'charity'),
                'items' => array(
                    array(
                        'value' => 'without-sidebar',
                        'label' => __('Project Single WithOut SideBar', 'charity'),
                        'img' => CHY_THEME_URL . '/assets/img/project-details.png',
                    ),
                    array(
                        'value' => 'sidebar',
                        'label' => __('Project Single WithSideBar', 'charity'),
                        'img' => CHY_THEME_URL . '/assets/img/project-details-withsidebar.png',
                    ),
                ),
            ),
        ),
    )
);

