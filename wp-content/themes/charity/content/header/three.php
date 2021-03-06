<?php
/**
 * Charity header three
 * @package charity
 * @version     v.1.0
 */
?><header id="header" class="header-second header-third">
    <div class="container hidden-xs">
        <div class="row primary-header">
            <div class="social-links col-xs-12 col-sm-12 col-md-8 col-md-offset-4">
                <?php
                $volunteer_btn_text = vp_option('vpt_option.become_volunteer_btn_text');
                $volunteer_btn_link = vp_option('vpt_option.become_volunteer_btn_link');
                $contact_mail_id = vp_option('vpt_option.info_mail_id');
                ?>
                <?php if (!empty($volunteer_btn_text)): ?><a href="<?php echo esc_url($volunteer_btn_link); ?>" class="btn btn-default btn-volunteer"><?php echo esc_attr($volunteer_btn_text); ?></a><?php endif; ?>
                <a href="mailto:<?php print($contact_mail_id); ?>" class="touch-by-mail"><?php print($contact_mail_id); ?></a>
            </div>
        </div>
    </div>
    <div class="navbar navbar-default navbar-alternate" role="navigation">
        <div class="nav-content">
            <div class="container">
                <?php $site_logo = (vp_option('vpt_option.site_header_two_logo')) ? vp_option('vpt_option.site_header_two_logo') : get_stylesheet_directory_uri() . "/assets/img/logo-second.png"; ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="col-xs-12 col-sm-2 brand" title="<?php bloginfo('name'); ?>"><img src="<?php echo esc_url($site_logo); ?>" alt="<?php bloginfo('name'); ?>"></a>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"><?php echo esc_html_e("Toggle navigation", "charity"); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-right search-form" role="search" action="<?php echo str_replace(array('http:', 'https:'), '', home_url('/')); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?php echo esc_attr_e("Search Here", "charity"); ?>" name="s">
                        </div>
                        <button type="button">
                            <i class="icon-search fa fa-search"></i>
                        </button>
                    </form>
                    <?php do_action("charity_nav_menu"); ?> 

                </div>
            </div>
        </div>
    </div>

</header>
<?php 

