<?php
get_header(); 
?>

<div id="global">
		<div id="wrapper">
			<div class="content">
				<div id="clients">
					<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="coda-slider" id="<?php the_ID(); ?>">
					
					
					<?php the_content(); ?>
					</div>
					<?php endwhile; else: ?>
					<p><?php _e('Sorry dude, no posts matched your criteria.'); ?></p>
					</div><!-- .coda-slider -->
					<?php endif; ?>
				</div>
			</div>
			

		</div>
</div>

</body>
</html>