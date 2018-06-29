<?php
/**
 * The main template file
 **/
get_header(); ?>
<div class="page-heading">
    <div class="container">
        <div class="page-title">
            <h3 class=""><?php esc_html_e('Blog','nikosa'); ?></h3>
            <div class="breadCumbs">
            	<?php nikosa_custom_breadcrumbs(); ?>
            </div>	
        </div>
    </div>
</div>
<?php get_template_part('content');
get_footer();