<?php get_header(); ?>
	<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
	
					<?php roots_loop_before(); ?>
					<?php get_template_part('loop', 'taxonomy'); ?>
					<?php roots_loop_after(); ?>
				
<?php get_footer(); ?>