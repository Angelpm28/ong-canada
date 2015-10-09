<?php
/**
 * Template Name: Charity Gallery
 *
 * @package     charity
 * @version     v.1.0
 */
get_header();

//breadcrumb
do_action("charity_breadcrumb", array("title" => get_the_title()));
?>
<div class="content-wrapper" id="page-info">
    <!-- Gallery sections Start Here -->
    <section class="we-help gallery-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!--Sub Breadcrumb Section Start Here-->
                    <?php do_action("charity_gallery_types_breadcrumb"); ?>
                    <!--Sub Breadcrumb Section Start Here-->
                    <!--Gallery Section Start Here-->
                    <div class="row gallery anim-section">
                        <?php
                        $paged = 1;
                        if (get_query_var('paged')) {
                            $paged = get_query_var('paged');
                        }
                        if (get_query_var('page')) {
                            $paged = get_query_var('page');
                        }

                        $args = array('post_type' => 'charity-gallery', 'post_status' => 'publish', "paged" => $paged);
                        query_posts($args);
                        if (have_posts()) :
                            while (have_posts()) : the_post();

                                //$galleryVideo = vp_metabox('video_gallery.video_image');
                                $layoutOption = vp_option("vpt_option.charity-gallery-layout");
                                $galleryClass = (!empty($layoutOption)) ? $layoutOption : 'col-sm-6';
                                $metaType = vp_metabox('cahrity-meta-type-settings.choose-meta-type');
                                //$metaType;
                                ?>
                                <div <?php post_class("cols-xs-12 " . $galleryClass); ?>>
                                        <?php $thumbClass = ( $metaType == "video") ? "embed-vedio" : "embed-image"; ?>
                                    <div class="thumbnail <?php echo esc_attr($thumbClass); ?>">
                                        <?php
                                        if ($metaType == "video"):
                                            do_action("charity_gallery_video");
                                        else:
                                            do_action("charity_gallery_image");
                                        endif;
                                        ?>                                           
                                        <h3 class="h3"><?php the_title(); ?></h3>
                                <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            chy_pagenavi();
                        else :
                            get_template_part('content/none');
                        endif;
                        wp_reset_query();
                        ?>
                    </div>

                    <!--Gallery Section End Here-->
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery sections Start Here -->
</div>
<?php
get_footer();
