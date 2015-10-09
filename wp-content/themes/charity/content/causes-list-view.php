<div class="article-list progressbar causes-list-view">						
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
            <div <?php post_class("col-xs-12"); ?>>
                <div class="causes-list-view-wrapper clearfix">
                    <div class="causes-list-thumbnails">
                        <?php if (has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>" class="img-thumb">
                                <figure>
                                    <?php the_post_thumbnail("charity_causes_thumb"); ?>
                                </figure>
                            </a>
                            <?php
                        endif;
                        do_action("charity_cauese_donation_progressbar");
                        ?>
                    </div>

                    <div class = "causes-list-body">
                        <h3 class="h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php
                            do_action("charity_cauese_donation_progressbar_details");
                            the_content("");
                            do_action("charity_causes_donation_button");
                            ?>
                    </div>
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