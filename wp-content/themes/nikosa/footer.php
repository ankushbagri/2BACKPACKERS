<?php
/*
 * nikosa default footer file
 */
?>
<footer>
	<div class="footerWrap animatedParent" data-appear-top-offset="-150">
        <div class="container">
            <div class="row">
            	<?php if ( get_theme_mod( 'nikosa_footer_logo' ) ) : ?>
                <div class="footerLogo"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home'><img class="img-responsiv" src="<?php echo esc_url( get_theme_mod( 'nikosa_footer_logo' ) ); ?>"></a> </div>
				<?php endif; ?>
                <div class="footerSocialicon">
                    <?php for($i=1;$i<=10;$i++):
                         if (get_theme_mod('nikosa_social_icon'.$i) != '' && get_theme_mod('nikosa_social_icon_link'.$i) != '') { ?>
                            <a target="_blank" href="<?php echo esc_url(get_theme_mod('nikosa_social_icon_link'.$i)); ?>"><i class="fa <?php echo esc_attr(get_theme_mod('nikosa_social_icon'.$i)); ?>"></i></a>
                        <?php }
                        endfor; ?>
                </div>
                <div class="footerCopyright"><?php echo wp_kses_post(get_theme_mod('footer_copyrights')); ?></div>
                <div class="footerCopyright">
                    <?php esc_html_e('Powered By','nikosa'); ?><a href="<?php echo esc_url('https://champthemes.com/wordpress-themes/nikosa-wordpress-theme/'); ?>" target="_blank"><?php esc_html_e('Nikosa WordPress Theme','nikosa'); ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>