<?php
/**
 * The template for displaying archive pages.
 *
 * @package nikosa
 */
get_header(); ?>
<div class="page-heading">
    <div class="container">
        <div class="page-title">
            <h3 class=""><?php the_archive_title(); ?></h3>
            <div class="breadCumbs">
            	<?php nikosa_custom_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_template_part( 'template-parts/content', get_post_format() ); 
get_footer();