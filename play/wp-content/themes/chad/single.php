<?php
get_header(); 
?>

<div id="global">
		<div id="wrapper">
			<div class="content">
			
				<div id="case-studies">
					<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					
					
					<?php the_content(); ?>
					
					
					
					
					
					
					
					
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					
					<?php endif; ?>
				</div>

			
				
			</div>
			

		</div>
</div>

</body>
</html>