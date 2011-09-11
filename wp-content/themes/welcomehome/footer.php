  <footer id="base">
    <p class="meta">Site Editor: <a href="mailto:sean.herron@nasa.gov">Sean Herron</a><br />
	NASA Official: <a href="mailto:nicholas.g.skytland@nasa.gov">Nick Skytland</a><br />
	<a href="http://www.nasa.gov/about/highlights/HP_Privacy.html">Privacy Policy and Important Notices</a></p>
	<p class="credit"><a href="http://open.nasa.gov">A NASA Open Government Initiative Website</a></p>
  </footer>

</div> <!-- /container -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script> 
<script src="js/jquery.masonry.min.js"></script> 
<script>
$(document).ready(function() {
$("li").each(function(index) {
    $(this).delay(10*index).fadeIn(900);
});
});
</script>

<?php wp_footer(); ?>
<?php roots_footer(); ?>

</body>
</html>