<?php
/**
 * Template Name: Full Width
 **/
get_header(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('blogwrap'); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="contentArea">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article class="blogpostContent">
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();