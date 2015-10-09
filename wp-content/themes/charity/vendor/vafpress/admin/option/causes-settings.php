<?php

return array(
    array(
        'type' => 'section',
        'title' => __('Causes Layout', 'charity'),
        'name' => 'causes-listing-settings',
        'description' => __('Causes Settings To Select Desired Causes Layout From Available Options', 'charity'),
        'fields' => array(
            array(
                'type' => 'radioimage',
                'name' => 'charity-causes-layout',
                'label' => __('Select Causes Layout from Available List', 'charity'),
                'description' => __('Select Here Causes Layout', 'charity'),
                'items' => array(
                    array(
                        'value' => 'gidView',
                        'label' => __('Grid View', 'charity'),
                        'img' => CHY_THEME_URL . '/assets/img/causes-grid-view.jpg',
                    ),
                    array(
                        'value' => 'listView',
                        'label' => __('List View', 'charity'),
                        'img' => CHY_THEME_URL . '/assets/img/causes-list-view.jpg',
                    ),
                ),
            ),
        )
    ),
    array(
        'type' => 'section',
        'title' => __('Causes Single Layout', 'charity'),
        'name' => 'causes-settings',
        'description' => __('Causes Settings To Select Desired Single Layout From Available Options', 'charity'),
        'fields' => array(
            array(
                'type' => 'radioimage',
                'name' => 'charity-causes-single-layout',
                'label' => __('Select Causes Single Layout from Available List', 'charity'),
                'description' => __('Select Here Causes Single Layout', 'charity'),
                'items' => array(
                    array(
                        'value' => 'fullwidth',
                        'label' => __('Full Width', 'charity'),
                        'img' => CHY_THEME_URL . '/assets/img/causesFullWidth.png',
                    ),
                    array(
                        'value' => 'sidebar',
                        'label' => __('With Right Sidebar', 'charity'),
                        'img' => CHY_THEME_URL . '/assets/img/causesWithsidebar.png',
                    ),
                ),
            ),
        )
    )
);