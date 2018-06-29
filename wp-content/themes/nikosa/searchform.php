<?php
/**
 * Template for displaying search forms in Theme
 */ ?>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form" method="get" role="search">
	<label>
		<span class="screen-reader-text"><?php esc_html_e('Search for:','nikosa'); ?></span>
		<input type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_html_e('Search','nikosa'); ?>" class="search-field">
	</label>
	<input type="submit" value="<?php esc_attr_e('Search','nikosa'); ?>" class="search-submit">
</form>