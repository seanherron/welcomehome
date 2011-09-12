<?php get_header(); ?>
	<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
	
					<?php roots_loop_before(); ?>
					<section id="content" class="clearfix">
					<?php get_template_part('loop', 'taxonomy'); ?>
					</section>
					<?php roots_loop_after(); ?>
					<script>
					$(function(){
						var $container = $('#content');

						$(window).resize(function(){
						  $container.masonry({
						      itemSelector: '.post',
						      isResizable: false,
						      // set columnWidth a fraction of the container width
						      columnWidth: $container.width() / 3
						  });
						// trigger resize to set up masonry on start-up
						}).resize();
					});
					</script>
					<script>
					$(function() {

					    var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com'], object, embed"),
					    $fluidEl = $(".post");

						$allVideos.each(function() {

						  $(this)
						    // jQuery .data does not work on object/embed elements
						    .attr('data-aspectRatio', this.height / this.width)
						    .removeAttr('height')
						    .removeAttr('width');

						});

						$(window).resize(function() {

						  var newWidth = $fluidEl.width();
						  $allVideos.each(function() {

						    var $el = $(this);
						    $el
						        .width(newWidth)
						        .height(newWidth * $el.attr('data-aspectRatio'));

						  });

						}).resize();

					});
					</script>
					
<?php get_footer(); ?>