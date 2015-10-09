<div class="article-list progressbar">						
    <?php
    $paged = 1;
    if (get_query_var('paged')) {
        $paged = get_query_var('paged');
    }
    if (get_query_var('page')) {
        $paged = get_query_var('page');
    }
    $args = array('post_type' => 'charity-causes', "post_status" => "publish", "paged" => $paged);
    global $more;
    query_posts($args);
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <div <?php post_class("cols-xs-12 col-sm-4 "); ?> >
                <div class="spacer-bottom zoom equal-box">
                    <h3 class="h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php if (has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>" class="img-thumb">
                            <figure>
                                <?php the_post_thumbnail("charity_causes_thumb"); ?>
                            </figure>
                        </a>
                        <?php
                    endif;
                    do_action("charity_cauese_donation_details");
                    the_content("");
                    do_action("charity_causes_donation_button");
                    ?>

                </div>
            </div>
            <?php
        endwhile;
        //do_action("charity_causes_donation_form");
        chy_pagenavi();
    else :
        get_template_part('content/none');
    endif;
    wp_reset_query();
    ?>
</div>