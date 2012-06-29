<?php
/*
Template Name: homepage
*/
?>
<?php
get_header(); 
?>
<?php get_sidebar(); ?>
<div id="global">
		<div id="wrapper">
			<div class="content">
				
					<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div id="welcome">
					<h2>
					<?php the_title(); ?></h2>
					
					<?php the_content(); ?>
					</div>
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					
					<?php endif; ?>
				<div class="arrows">
				<a class="runload" id="nextarrow" href="<?php bloginfo(siteurl) ?>/clients/caswell-massey/" >Next</a>
				</div>
			</div>
			

		</div>
</div>

</body>
</html>