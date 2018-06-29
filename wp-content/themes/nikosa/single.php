<?php
/**
 * The main template file
 **/
get_header(); ?>
<div class="page-heading">
    <div class="container">
        <div class="page-title">
            <h3><?php the_title(); ?></h3>
            <div class="breadCumbs">
                <?php nikosa_custom_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</div>
<div id="post-<?php the_ID(); ?>" <?php post_class('blogwrap'); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="contentArea">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article class="blogpostContent">
                        <div class="titleData">
                            <h4 class="post-title">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h4>
                            <div class="entryMeta">
                                <ul>
                                    <li>
                                        <?php printf('<time class="postCalendardate" datetime="%1$s">%2$s</time>', esc_attr(get_the_date('c')), esc_html(get_the_date(get_option( 'date_format' )))); ?>
                                    </li>
                                    <li>
                                        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><div class="metaData"><span class="byAuthor"><i class="fa fa-pencil"></i><?php _e('By ','nikosa'); ?><?php echo ucfirst(get_the_author()); ?></span></div></a>
                                    </li>
                                    <li><i class="fa fa-comments-o"></i><?php comments_number('0','1','%'); ?></li> 
                                </ul>
                            </div>
                        </div>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="blogfeaturedImage">
                                        <?php the_post_thumbnail('',array( 'alt' => get_the_title(), 'class' => 'img-responsive')); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                        <?php if(get_the_tag_list() != '') : ?>
                            <div class="tagList">
                                <strong><?php esc_html_e('Tags:','nikosa'); ?></strong><i class="fa fa-tags"></i>
                                <span> 
                                    <?php echo get_the_tag_list(' #', ' #' ); ?>
                                </span>
                            </div>
                        <?php endif;
                        $nikosa_defaults = array(
                            'before'           => '<p>' . esc_html__( 'Pages:', 'nikosa' ),
                            'after'            => '</p>',
                            'link_before'      => '',
                            'link_after'       => '',
                            'next_or_number'   => 'number',
                            'separator'        => ' ',
                            'nextpagelink'     => esc_html__( 'Next', 'nikosa' ),
                            'previouspagelink' => esc_html__( 'Previous', 'nikosa' ),
                            'pagelink'         => '%',
                            'echo'             => 1
                        );
                        wp_link_pages( $nikosa_defaults );
                        the_post_navigation( array(
                            'prev_text'                 => esc_html__( 'previous', 'nikosa' ),
                            'next_text'                 => esc_html__( 'next', 'nikosa' ),
                            'screen_reader_text'        => esc_html__(' ', 'nikosa'),
                        ) );
                        comments_template('', true); ?>
                    </article>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer();