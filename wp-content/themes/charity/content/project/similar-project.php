<div class="similar-project">
    <div class="row">
        <div class="col-xs-12">
            <h3><?php echo vp_option('vpt_option.ch_similar_project'); ?></h3>
        </div>
        <div class="similar-project-wrapper clearfix">
            <?php
            $layoutOption = vp_option("vpt_option.charity-project-single-layout");
            if ($layoutOption == "sidebar") {
                $show_post = 3;
                $project_class = 'col-xs-12 col-sm-6 col-md-4 similar-project-listing';
            } else {
                $show_post = 4;
                $project_class = 'col-xs-12 col-sm-6 col-md-3 similar-project-listing';
            }
            ?>

            <?php
            global $post;
            $thePostID = $post->ID;
            $project_terms = wp_get_post_terms($thePostID, 'project-type');
            $get_project_term_ID = $project_terms[0]->term_id;
            $project_posts = array(
                'showposts' => $show_post,
                'post_type' => 'charity-project',
                'post__not_in' => array(get_the_ID()),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'project-type',
                        'field' => 'id',
                        'terms' => $get_project_term_ID,
                    )
            ));
            $project_similar_post = new WP_Query($project_posts);
            if ($project_similar_post->have_posts()): while ($project_similar_post->have_posts()): $project_similar_post->the_post();
                    ?>
                    <div <?php post_class($project_class); ?>>
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
                wp_reset_postdata();
                ?>
            <?php else : ?>
                <p class="col-xs-12"><?php _e('No Similar Project Found..'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>