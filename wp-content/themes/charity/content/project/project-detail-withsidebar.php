<div class="row project-detail-withsidebar">
    <div class="col-xs-12 col-sm-8 col-md-9">
        <div class="project-listing-header">
            <div class="row">
                <div class="col-xs-12">
                    <h2><?php echo vp_option('vpt_option.ch_see_project_details'); ?></h2>
                </div>
            </div>
        </div>

        <section class="project-listing project-details">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    if (have_posts()): while (have_posts()) : the_post();
                            ?>
                            <div <?php post_class(); ?>>
                                <div class="thumbnail zoom">
                                    <?php if (has_post_thumbnail()): ?>
                                        <span class="img-thumb">
                                            <figure>
                                                <?php the_post_thumbnail(); ?>
                                            </figure>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        ?>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <?php the_charity_post_navigation(); ?>
                            </div>    
                        </div>    
                    <?php endif;
                    ?>
                </div>
            </div>
        </section>

        <!-- Similar Project Section Starts -->
        <?php get_template_part('content/project/similar', 'project'); ?>
        <!-- Similar Project Section Ends -->
    </div>

    <div class="col-xs-12 col-sm-4 col-md-3">

        <div class="project-sidebar">

            <?php dynamic_sidebar('project-widget'); ?>

        </div>

    </div>
</div>