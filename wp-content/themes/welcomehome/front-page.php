<?php get_header(); ?>
<ul class="category-matrix clearfix">
				<?php
$args=array(
  'orderby' => 'name',
  'taxonomy' => 'expedition',
  'order' => 'DESC',
  'hide_empty' => '1'
  );
$categories=get_categories($args);
  foreach($categories as $category) {
$expeditionimage =	xydac_cloud('expedition',$category->slug,'image');
$output = '
	<li><a href="' . get_category_link( $category->term_id ) . '">
	<div class="heading"><h2>' . $category->name.'</h2></div>
	<img src="' . $expeditionimage . '" alt="Expedition 28" />
	</a></li>
';
echo $output;
}
?>
</ul>
<?php get_footer(); ?>