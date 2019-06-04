<?php
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<main class="post wp-internal" id="post-<?php the_ID(); ?>">
			<?php// get_template_directory_uri().'/page-template/page-home.php'; ?>

			<div class="bg-interna" style="background: url('<?php echo get_template_directory_uri()."/img/interna.png"; ?>');">

			</div>

			<div class="container py-5">
				<?php the_content(); ?>
			</div>

		</main>

	<?php endwhile; endif; ?>

<?php// get_sidebar(); ?>

<?php get_footer(); ?>
