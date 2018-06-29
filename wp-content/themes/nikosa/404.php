<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package nikosa
 */
get_header(); ?>
<div class="page-heading">
    <div class="container">
        <div class="page-title">
            <h3 class=""><?php esc_html_e( "Oops! That page can't be found", 'nikosa' ); ?></h3>
            <div class="breadCumbs">
                <?php nikosa_custom_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</div>
<div class="blogwrap">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="error-page">
                    <div class="error-title"><?php esc_html_e('4','nikosa'); ?> <i class="fa fa-spin fa-grav" aria-hidden="true"></i> <?php esc_html_e('4','nikosa'); ?></div>
                    <h6><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'nikosa' ); ?></h6>
                    <div class="sideArea">
                        <?php get_search_form(); ?>
                    </div>
                    <div><a class="error-link nikosa-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home" aria-hidden="true"></i>  <?php esc_html_e('Take Me Home','nikosa'); ?></a></div>
                </div>
        	</div>
        </div>
    </div>
</div>
<?php get_footer();