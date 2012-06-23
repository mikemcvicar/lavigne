<?php
/*
Template Name: bios
*/
?>
<?php
get_header(); 
?>

		<div class="content">		
				<div id="bios">
					<?php

					// The Query
					query_posts( 'cat=4&order=ASC' );
					
					// The Loop
					while ( have_posts() ) : the_post(); ?>
						
					<div class="bio">
					<div class="bio-thumb">
					<?php the_post_thumbnail('bio-thumb', array('class' => 'biothumb')); ?>
					</div>
					
					<h2>
					<?php the_title(); ?></h2>
					<div class="open" id="<?php the_ID(); ?>">
					<div class="close"> </div>
					<div class="dude">
					<div class="bio-big">
					<?php the_post_thumbnail('bio-big', array('class' => 'biobig')); ?>
					</div>
					<h2>
					<?php the_title(); ?></h2>
					
					<?php the_content(); ?>
					</div>
					</div>
					</div>
					
					
					
					<?php endwhile;
					
					// Reset Query
					wp_reset_query();
					
					?>
					
				</div>	
					
				<div class="arrows">
				<a class="runload" id="prevarrow" href="<?php bloginfo(siteurl) ?>/press/press" >Previous</a>
				<a class="runload" id="nextarrow" href="<?php bloginfo(siteurl) ?>/play" >Next</a>
					</div>
</div>
</body>
</html>