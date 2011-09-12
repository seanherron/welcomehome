<?php get_header(); ?>
	<?php roots_content_before(); ?>
		<header class="expedition clearfix">
			<h2><?php the_title(); ?></h2>
			<img class="patch" src="<?php echo do_shortcode('[xy_expedition field="patch"]'); ?>" alt="Expedition 28 Patch" align="right" style="margin-top:-10px;"/>
			<?php echo get_the_term_list($post->ID,  'expedition'); ?>
			<date><?php the_time('F jS, Y') ?></date>
			</header>
		<?php roots_loop_before(); ?>
		<section id="content" class="clearfix">
		<?php get_template_part('loop', 'single'); ?>
		</section>
	<?php roots_content_after(); ?>
<?php get_footer(); ?>