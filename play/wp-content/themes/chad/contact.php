<?php
/*
Template Name: contact
*/
?>
<?php
get_header(); 
?>

<div id="global">
		<div id="wrapper">
			<div class="content">
				
					<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div id="contact">
					
					<?php the_content(); ?>
					</div>
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					
					<?php endif; ?>
					<div class="arrows">
				<a class="runload" id="prevarrow" href="<?php bloginfo(siteurl) ?>/case-studies" >Previous</a>
				<a class="runload" id="nextarrow" href="<?php bloginfo(siteurl) ?>/press/press" >Next</a>
					</div>
			</div>

		</div>
</div>

</body>
</html>