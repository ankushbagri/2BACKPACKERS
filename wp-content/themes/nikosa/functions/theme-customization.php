<?php
/**
* Customization options
**/
function nikosa_sanitize_text($nikosa_input){
  return wp_kses_post( force_balance_tags( $nikosa_input ) );
}
function nikosa_customize_register( $wp_customize ) {
  $wp_customize->add_panel(
    'footer',
    array(
      'title' => esc_html__( 'Footer','nikosa' ),
      'description' => esc_html__('layout options', 'nikosa'), 
      'priority' => 41,
    )
  );
  /* Content Widget Layout */
  $wp_customize->add_section(
    'footer_copyrights_section',
    array(
      'title' => esc_html__('Footer Copyrights Section','nikosa'),
      'panel' => 'footer'
    )
  );
  $wp_customize->add_section(
    'footer_socials',
    array(
      'title' => esc_html__('Social Accounts','nikosa'),
      'description' => __( 'In first input box, you need to add Font Awesome class which you can find <a target="_blank" href="https://fortawesome.github.io/Font-Awesome/icons/">here</a> and in second input box, you need to add your social media profile URL.<br /> Leave it empty to hide the icon.' , 'nikosa'),
      'panel' => 'footer'
    )
  );
  //adding setting for footer text area
  $wp_customize->add_setting('footer_copyrights',
    array(
      'sanitize_callback' => 'wp_kses',
    )
  );
  $wp_customize->add_control('footer_copyrights',
    array(
      'label'   => esc_html__('Footer Copy Rights','nikosa'),
      'section' => 'footer_copyrights_section',
      'type'    => 'textarea',
    )
  );
  /* End Content Widget Layout */
  /* footer Logo */
  $wp_customize->add_section(
    'nikosa_footer_logo_section',
    array(
      'title'       => esc_html__( 'Footer Logo', 'nikosa' ),
      'priority'    => 30,
      'panel'       => 'footer'
    )
  );
  $wp_customize->add_setting(
    'nikosa_footer_logo',
    array(
      'sanitize_callback' => 'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'nikosa_footer_logo',
      array(
        'label'    => esc_html__( 'Logo', 'nikosa' ),
        'section'  => 'nikosa_footer_logo_section',
        'settings' => 'nikosa_footer_logo',
      )
    )
  );
  /* end Footer Logo */

  $wp_customize->add_setting(
    'nikosa_body_text_color',
    array(
      'default' => '#8d99ae',
      'capability'     => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_hex_color',
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'nikosa_body_text_color',
      array(
        'label'      => esc_html__('Body Text Color', 'nikosa'),
        'section' => 'colors',
        'settings' => 'nikosa_body_text_color',
      )
    )
  );

  $wp_customize->add_setting(
    'nikosa_main_color',
    array(
      'default' => '#d80032',
      'capability'     => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_hex_color',
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'nikosa_main_color',
      array(
        'label'      => esc_html__('Theme Color', 'nikosa'),
        'section' => 'colors',
        'settings' => 'nikosa_main_color',
      )
    )
  );
  $wp_customize->add_setting(
    'nikosa_side_color',
    array(
      'default' => '#2b2d42',
      'capability'     => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_hex_color',
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'nikosa_side_color',
      array(
        'label'      => esc_html__('Secondary Color', 'nikosa'),
        'section' => 'colors',
        'settings' => 'nikosa_side_color',
      )
    )
  );
  $wp_customize->add_setting(
    'nikosa_footer_background_color',
    array(
      'default' => '#2B2D42',
      'capability'     => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_hex_color',
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'nikosa_footer_background_color',
      array(
        'label'      => esc_html__('Footer Background Color', 'nikosa'),
        'section' => 'colors',
        'settings' => 'nikosa_footer_background_color',
      )
    )
  );
  $wp_customize->add_setting(
    'nikosa_footer_text_color',
    array(
      'default' => '#8D99AE',
      'capability'     => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_hex_color',
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'nikosa_footer_text_color',
      array(
        'label'      => esc_html__('Footer Text Color', 'nikosa'),
        'section' => 'colors',
        'settings' => 'nikosa_footer_text_color',
      )
    )
  );

  $nikosa_social_icon = array();
  $nikosa_social_icon[] =  array( 'slug'=>'nikosa_social_icon1', 'default' => '', 'label' => esc_html__( 'Social Account 1', 'nikosa' ),'priority' => '1' );
  $nikosa_social_icon[] =  array( 'slug'=>'nikosa_social_icon2', 'default' => '', 'label' => esc_html__( 'Social Account 2', 'nikosa' ),'priority' => '3' );
  $nikosa_social_icon[] =  array( 'slug'=>'nikosa_social_icon3', 'default' => '', 'label' => esc_html__( 'Social Account 3', 'nikosa' ),'priority' => '5' );
  $nikosa_social_icon[] =  array( 'slug'=>'nikosa_social_icon4', 'default' => '', 'label' => esc_html__( 'Social Account 4', 'nikosa' ),'priority' => '7' );
  $nikosa_social_icon[] =  array( 'slug'=>'nikosa_social_icon5', 'default' => '', 'label' => esc_html__( 'Social Account 5', 'nikosa' ),'priority' => '9' );
  foreach($nikosa_social_icon as $nikosa_social_icons){
    $wp_customize->add_setting(
      $nikosa_social_icons['slug'],
      array(
        'default' => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
      )
    );
    $wp_customize->add_control(
      $nikosa_social_icons['slug'],
      array(
        'type'  => 'text',
        'section' => 'footer_socials',
        'input_attrs' => array( 'placeholder' => esc_attr__('Enter Icon','nikosa') ),
        'label'      =>   $nikosa_social_icons['label'],
        'priority' => $nikosa_social_icons['priority']
      )
    );
  }
  $nikosa_social_icon_link = array();
  $nikosa_social_icon_link[] =  array( 'slug'=>'nikosa_social_icon_link1', 'default' => '', 'label' => esc_html__( 'Social Link 1', 'nikosa' ),'priority' => '1' );
  $nikosa_social_icon_link[] =  array( 'slug'=>'nikosa_social_icon_link2', 'default' => '', 'label' => esc_html__( 'Social Link 2', 'nikosa' ),'priority' => '3' );
  $nikosa_social_icon_link[] =  array( 'slug'=>'nikosa_social_icon_link3', 'default' => '', 'label' => esc_html__( 'Social Link 3', 'nikosa' ),'priority' => '5' );
  $nikosa_social_icon_link[] =  array( 'slug'=>'nikosa_social_icon_link4', 'default' => '', 'label' => esc_html__( 'Social Link 4', 'nikosa' ),'priority' => '7' );
  $nikosa_social_icon_link[] =  array( 'slug'=>'nikosa_social_icon_link5', 'default' => '', 'label' => esc_html__( 'Social Link 5', 'nikosa' ),'priority' => '9' );
  foreach($nikosa_social_icon_link as $nikosa_social_icons){
    $wp_customize->add_setting(
      $nikosa_social_icons['slug'],
      array(
        'default' => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
      )
    );
    $wp_customize->add_control(
      $nikosa_social_icons['slug'],
      array(
        'type'  => 'text',
        'section' => 'footer_socials',
        'priority' => $nikosa_social_icons['priority'],
        'input_attrs' => array( 'placeholder' => esc_html__('Enter URL','nikosa')),
      )
    );
  }
}
add_action( 'customize_register', 'nikosa_customize_register' );

function nikosa_custom_css(){ 
  $nikosa_theme_color = get_theme_mod('nikosa_main_color','#d80032'); ?>
  <style type="text/css">
    .entryMeta .byAuthor,
    .page-title h3,
    #nikosamenu > ul > li > a:after,
    .sideArea input:focus,
    .sideArea  select:focus {border-color: <?php echo esc_attr(nikosa_hex_to_rgba($nikosa_theme_color,1)); ?>;}
    a:hover,
    a:focus,
    .postCalendardate,
    #breadcrumbs .separator,
    .sideArea .search-form label:after,
    .sideArea ul li a:hover,
    .footerWrap a:hover,
    #nikosamenu ul ul li:hover > a, 
    #nikosamenu ul ul li a:hover,
    #nikosamenu #menu-button{color: <?php echo esc_attr(get_theme_mod('nikosa_main_color','#d80032')); ?>; }
    .sideArea .tagcloud a:hover { background: <?php echo esc_attr(get_theme_mod('nikosa_main_color','#d80032')); ?>; }
    .blogpostContent .post-navigation a:hover,
    .page-numbers:hover,
    .page-numbers.current,
    .nikosa-link:hover{box-shadow:0 -5px 0 0 <?php echo esc_attr(get_theme_mod('nikosa_main_color','#d80032')); ?> inset;}
    .sideArea input,
    .sideArea select{ border-color: <?php echo esc_attr(get_theme_mod('nikosa_side_color','#2b2d42')); ?>; }
    .sideArea .tagcloud a,
    .blogpostContent .post-navigation a,
    .next.page-numbers,
    .page-numbers,
    .prev.page-numbers,
    .footerWrap,a.nikosa-link{ background: <?php echo esc_attr(get_theme_mod('nikosa_side_color','#2b2d42')); ?>; }
    .footerWrap{ background: <?php echo esc_attr(get_theme_mod('nikosa_footer_background_color','#2b2d42')); ?>; }
    .footerCopyright,.footerWrap a{ color: <?php echo esc_attr(get_theme_mod('nikosa_footer_text_color','#8D99AE')); ?>; }
    .blogpostContent{ color: <?php echo esc_attr(get_theme_mod('nikosa_body_text_color','#8d99ae')); ?>; }
    a,
    .page-title h3,
    .sideArea h3,
    .sideArea a,
    #nikosamenu ul li a,
    #nikosamenu ul, 
    #nikosamenu ul li,
    .fixedHeader #nikosamenu > ul > li > a,
    #nikosamenu ul ul li a{ color: <?php echo esc_attr(get_theme_mod('nikosa_side_color','#2b2d42')); ?>; }
    @media (max-width: 1024px){
      #nikosamenu a,#nikosamenu ul ul li a{
        color: <?php echo esc_attr(get_theme_mod('nikosa_side_color','#2b2d42')); ?>;
      }
      #nikosamenu ul li a:hover{
        color: <?php echo esc_attr(get_theme_mod('nikosa_main_color','#d80032')); ?>;
      }
    }
    <?php if(get_theme_mod('header_text') == 0):  ?>
    .brand-text{
      clip: rect(1px, 1px, 1px, 1px);
      position: absolute;
    }
    <?php else: ?>
    .brand-text{
      clip: auto;
      position: relative;
    }
    <?php endif; ?>
  </style>
<?php }
add_action('wp_head','nikosa_custom_css',900);