<?php
/*
 * The Template for displaying project detail page
 *
 * @package     charity
 * @version     v.1.0
 * */

get_header();

//breadcrumb
do_action("charity_breadcrumb", array("title" => get_the_title()));
?>
<!-- Project page Start Here-->
<div id="page-info" class="content-wrapper">
    <div class="container">
        <?php do_action("charity_project_post_details_layout"); ?>
    </div>
</div>
</div>

<!-- Project page End-->

<?php
get_footer();



