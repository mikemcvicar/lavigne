<?php
/*
Template Name: case studies archive
*/
?>
<?php
get_header(); 
?>

<div id="global">
		<div id="wrapper">
			<div class="content">
				<div id="cases">
				<?php

					// The Query
					query_posts( 'cat=8' );
					
					// The Loop
					while ( have_posts() ) : the_post(); ?>
						
					<div class="casearch">
					<a href="<?php echo get_permalink(); ?>">
					<?php the_post_thumbnail('case-thumb'); ?>
					
					
					<h2>
					<?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					Read More...</a>
					</div>
					
					
					
					<?php endwhile;
					
					// Reset Query
					wp_reset_query();
					
					?>
				
				
				</div>
				<div class="arrows">
				<a class="runload" id="prevarrow" href="<?php bloginfo(siteurl) ?>" >Previous</a>
				<a class="runload" id="nextarrow" href="<?php bloginfo(siteurl) ?>/contact" >Next</a>
				</div>
			</div>
			

		</div>
</div>

</body>
</html>