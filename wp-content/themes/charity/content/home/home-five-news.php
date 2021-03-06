<?php
/**
 * Charity -  Home five Latest News
 *
 * @package     charity
 * @since       1.3.0
 */
global $more, $charityHomeNews;
$more = 0;
$charityHomeNews = "latestNewsSection";

query_posts(array("post_type" => "post", "post_status" => "publish", "posts_per_page" => 3));
if (have_posts()) :
    ?>
    <section class="latest-news ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <header class="page-header section-header clearfix">
                        <h2 class="home-four-title"><?php echo vp_option('vpt_option.ch_hfour_latest_news_title'); ?></h2>
                    </header>

                    <div class="article-list row">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="items zoom col-xs-12 col-sm-4 charity-latest-news-home-one">
                                <?php
                                $format = (get_post_format()) ? get_post_format() : "standard";
                                get_template_part('content/format/' . $format);
                                ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
endif;
wp_reset_query();