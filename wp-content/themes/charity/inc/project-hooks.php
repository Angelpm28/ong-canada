<?php

/**
 * Charity hooks function
 *
 * @package  charity
 * @version  v.1.0
 */
class CharityProjectHooks {

    public function __construct() {
        $this->action();
    }

    public function action() {
        add_action("charity_project_post_layout", array(&$this, "charityProjectPostLayout"));
        add_action("charity_project_post_details_layout", array(&$this, "charityProjectPostDetailsLayout"));
    }

    function charityProjectPostLayout() {
        $layoutOption = vp_option("vpt_option.charity-project-layout");
        if ($layoutOption == "sidebar") {
            get_template_part("content/project/project", "listing-withsidebar");
        } else {
            get_template_part("content/project/project", "listing");
        }
    }

    function charityProjectPostDetailsLayout() {
        $layoutOption = vp_option("vpt_option.charity-project-single-layout");
        if ($layoutOption == "sidebar") {
            get_template_part("content/project/project", "detail-withsidebar");
        } else {
            get_template_part("content/project/project", "detail");
        }
    }

}

new CharityProjectHooks();




