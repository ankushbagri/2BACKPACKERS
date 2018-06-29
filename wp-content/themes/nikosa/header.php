<?php
/*
 * The Header template for theme
 */ 
 ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="ThenikosaWrapper">
        <header>
            <nav class="navbar navbar-fixed-top ThenikosaNav">
                <div class="headerWrap clearfix">
                    <div class="container">
                        <!-- Logo start -->
                        <div class="mainLogo">
                            <?php $custom_logo = get_custom_logo();
                            if(get_theme_mod( 'custom_logo' ) != ''){
                                echo $custom_logo;
                            } else { echo '<div class="logo-light brand-text"><a href="'.esc_url(home_url('/')).'" rel="home"><h4 class="custom-logo">'.get_bloginfo('name').'</h4></a><h6 class="custom-logo">'.get_bloginfo('description').'</h6></div>'; } ?>
                        </div>
                        <!-- Logo start -->
                        <!-- Menu start -->
                        <div id="nikosamenu">
                            <?php $nikosa_defaults = array(
                                    'theme_location' => 'primary',
                                    'container' => 'ul',
                                    'items_wrap' => '<ul>%3$s</ul>',
                                );
                                wp_nav_menu($nikosa_defaults); ?>
                        </div>
                        <!-- Menu end -->
                    </div>
                </div>
            </nav>
        </header>
    </div>