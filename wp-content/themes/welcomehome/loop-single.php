<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<?php roots_post_before(); ?>
		<article id="post-<?php the_ID(); ?>" class="single post">
			<?php the_content(); ?>
		</article>
	<?php roots_post_after(); ?>
<?php endwhile; // End the loop ?>