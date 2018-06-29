<div class="blogwrap">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="contentArea">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="blogpostContent type-post">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="blogfeaturedImage">
                                            <a href="blog-post.html">
                                                <?php the_post_thumbnail('',array( 'alt' => get_the_title(), 'class' => 'img-responsive')); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <?php if ( !empty (get_the_title()) ) : ?>
                                        <h4 class="post-title">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                    <?php endif; ?>
                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                        <a class="postReadmore" href="<?php the_permalink(); ?>"><i class="fa fa-fw fa-angle-double-right "></i><?php esc_html_e('Continue Reading','nikosa'); ?></a>
                                        <div class="entryMeta">
                                        <?php printf('<span class="postCalendardate" datetime="%1$s"><i class="fa fa-calendar" aria-hidden="true"></i> %2$s</span>', esc_attr(get_the_date('c')), esc_html(get_the_date(get_option( 'date_format' )))); ?>
                                        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="byAuthor"><?php echo __('By','nikosa'); ?> <?php echo ucfirst(get_the_author()); ?></span></a>
                                    </div>
                                    </div>

                                </div>
                            </div>
                        </article>
                    <?php endwhile; 
                    the_posts_pagination( array(
                        'Previous' => __( 'Back', 'nikosa' ),
                        'Next' => __( 'Onward', 'nikosa' ),
                    ) ); ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>