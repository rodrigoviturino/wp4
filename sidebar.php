<?php
get_header(); ?>
<aside id="sidebar">

<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
		<?php get_search_form(); ?>

		<h3><?php _e('Archives' ,'starttheme'); ?></h3>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>

		<h3><?php _e('Meta' ,'starttheme'); ?></h3>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.' ,'starttheme'); ?>"><?php _e('WordPress' ,'starttheme'); ?></a></li>
			<?php wp_meta(); ?>
		</ul>

		<h3><?php _e('Subscribe' ,'starttheme'); ?></h3>
		<ul>
			<li><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)' ,'starttheme'); ?></a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)' ,'starttheme'); ?></a></li>
		</ul>
	<?php endif; ?>

</aside>