<?php 
/*
 * Set up the content width value based on the theme's design.
 */
if (!function_exists('nikosa_setup')) :
    function nikosa_setup() {
        global $content_width;
        if (!isset($content_width)) {
            $content_width = 870;
        }
        // Make nikosa theme available for translation.
        load_theme_textdomain('nikosa', get_template_directory() . '/languages');

        // Add RSS feed links to <head> for posts and comments.
        add_theme_support('automatic-feed-links');
        // register menu 
        register_nav_menus(array(
            'primary' => __('Top Menu', 'nikosa'),
        ));

        // Featured image support
        add_theme_support('post-thumbnails');
        add_theme_support( 'custom-logo', array(
            'height'      => 130,
            'width'       => 130,
            'flex-widthe' => true,
            'flex-height' => true,
            'header-text' => array('site-description' ), 
        ) );
        add_image_size('nikosa_thumbnail_image', 800, 450, true);
        add_image_size('nikosa_blog_thumbnail_image', 1540, 390, true);
        // Switch default core markup for search form, comment form, and commen, to output valid HTML5.
        add_theme_support('html5', array('comment-list'));
        add_theme_support( "custom-background");
        /* slug setup */
        add_theme_support('title-tag');
      add_filter('siteorigin_widgets_active_widgets', 'nikosa_active_widgets');
      function nikosa_active_widgets($active){
        //Bundled Widgets
        $active['video'] = true;
        $active['testimonial'] = true;
        $active['taxonomy'] = true;
        $active['social-media-buttons'] = true;
        $active['simple-masonry'] = true;
        $active['slider'] = true;
        $active['cta'] = true;
        $active['contact'] = true;
        $active['features'] = true;
        $active['headline'] = true;
        $active['hero'] = true;
        $active['icon'] = true;
        $active['image-grid'] = true;
        $active['price-table'] = true;
        $active['layout-slider'] = true;
        return $active;
      }
    }
endif;
add_action('after_setup_theme', 'nikosa_setup');
function nikosa_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
    }
}
add_action( 'wp_head', 'nikosa_pingback_header' );

function nikosa_fonts_url() {
    $nikosa_fonts_url = '';
    /**
     * Translators: If there are characters in your language that are not
     * supported by Libre Franklin, translate this to 'off'. Do not translate
     * into your own language.
     */
    $nikosa_libre_franklin = _x( 'on', 'Roboto font: on or off', 'nikosa' );

    if ( 'off' !== $nikosa_libre_franklin ) {
        $nikosa_font_families = array();

        $nikosa_font_families[] = 'Roboto:400,300,500,700,900';

        $nikosa_query_args = array(
            'family' => urlencode( implode( '|', $nikosa_font_families ) ),
        );

        $nikosa_fonts_url = add_query_arg( $nikosa_query_args, 'https://fonts.googleapis.com/css' );
    }

    return esc_url_raw( $nikosa_fonts_url );
}

//Additional Menu
add_action('admin_menu', 'nikosa_add_page');
function nikosa_add_page() {
  add_theme_page(__('NikosaPro Features', 'nikosa'), __('NikosaPro Features', 'nikosa'), 'edit_theme_options', 'nikosapro-features','nikosapro_page');
}

function nikosapro_page(){ ?>
<div class="">
  <a href="<?php echo esc_url('https://champthemes.com/wordpress-themes/nikosa-pro-wordpress-theme/'); ?>" target="_blank" title="NikosaPro Page">
    <img src ="<?php echo esc_url(get_template_directory_uri().'/assets/images/featured-nikosa.jpg') ?>" width="98%" height="auto" />
  </a>
</div>
<?php
}

/* Hex to Rgba*/
function nikosa_hex_to_rgba($color, $opacity) {
  $default = 'rgb(0,0,0)';
  if(empty($color))
          return $default; 
        if ($color[0] == '#' ) 
        {
          $color = substr( $color, 1 );
        }
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
        $rgb =  array_map('hexdec', $hex);
        if($opacity){
          if(abs($opacity) > 1)
            $opacity = 1.0;
          $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
          $output = 'rgb('.implode(",",$rgb).')';
        }
        return $output;
}
require get_template_directory() . '/functions/breadcumbs.php';
require get_template_directory() . '/functions/enqueue-files.php';
require get_template_directory() . '/functions/theme-customization.php';
require get_template_directory() . '/functions/tgm-plugins.php';