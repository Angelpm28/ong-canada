<?php
/*
 * Charity - taxonomy project category 
 *
 * @package     charity
 * @version     v.1.0
 * */

get_header();

//breadcrumb
do_action("charity_breadcrumb", array("title" => single_term_title("", false), "template_file" => "charity-project.php"));
?>
<!-- Project page Start Here-->
<div id="page-info" class="content-wrapper">
    <div class="container">
        <div class="project-listing-header">
            <div class="row">
                <div class="col-xs-12">
                    <h2><?php echo vp_option('vpt_option.ch_see_our_title'); ?></h2>
                </div>
            </div>
        </div>

        <section class="project-listing">
            <div class="row">

                <?php
                if (have_posts()): while (have_posts()) : the_post();
                        ?>
                        <div <?php post_class("col-xs-12 col-sm-6 col-md-3"); ?>>
                            <div class="thumbnail zoom">
                                <?php if (has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>" class="img-thumb">
                                        <figure>
                                            <?php the_post_thumbnail('charity_project_list'); ?>
                                        </figure>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_content('Read More'); ?>
                        </div>
                        <?php
                    endwhile;
                    chy_pagenavi();
                endif;
                ?>

            </div>
        </section>
    </div>
</div>
</div>

<!-- Project page End-->

<?php
get_footer();
