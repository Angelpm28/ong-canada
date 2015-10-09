<?php
/*
 *  Template Name: Charity Causes
 *
 * @package     charity
 * @version     v.1.0
 * */

get_header();

//breadcrumb
do_action("charity_breadcrumb", array("title" => get_the_title()));
?>
<!-- cause page Start Here-->
<div class="content-wrapper cause-page-section" id="page-info">
    <div class="container">
        <section class="our-story row ">
            <div class="col-xs-12">
                <?php get_template_part('content/causes', 'header'); ?>
            </div>
        </section>

        <!-- Our Causes Section-->
        <section class="our-causes">
            <!-- div class="anim-section" -->
            <div class="row">													
                <!-- Article Section Start Here -->
                <?php do_action("charity_causes_post_layout"); ?>
                <!-- Article Section Ends Here -->

            </div>
            <!--/div-->
        </section>
        <!-- Our Causes Section End-->

    </div>

</div>
<!-- cause page Start End-->
<?php
get_footer();
