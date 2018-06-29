<?php
/**
 * The template for displaying search results pages
 *
 *
 * @package nikosa
 */
get_header();?>
<div class="page-heading">
    <div class="container">
        <div class="page-title">
            <h3 class=""><?php printf( esc_html__( 'Search Results for: %s', 'nikosa' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
        	<div class="breadCumbs">
            	<?php nikosa_custom_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</div>
<?php  
if ( have_posts() ) { 
	get_template_part( 'template-parts/content', 'search' );
}else {
	get_template_part( 'template-parts/content', 'none' );
}
get_footer();