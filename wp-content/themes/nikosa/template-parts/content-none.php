<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 *
 * @package nikosa
 */
?>
<div class="blogwrap">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="sideArea">
					<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
						<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'nikosa' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
					<?php elseif ( is_search() ) : ?>
							<p><h4 class="fa fa-frown-o" aria-hidden="true" style="font-size: 22px;"></h4> <?php esc_html_e( 'Oops! Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'nikosa' ); ?></p>
						<?php get_search_form();
						else : ?>
							<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'nikosa' ); ?></p>
						<?php get_search_form();
					endif; ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>