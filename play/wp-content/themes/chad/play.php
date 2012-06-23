<?php
/*
Template Name: play
*/
?>
<?php
get_header(); 
?>
<div class="content">	
<div id="play">
<?php
query_posts( array( 'category__and' => array(5,6,7)) );
?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( in_category('play-big') ) { ?>
           <div class="box big">
           <?php the_post_thumbnail('play-big') ?>
<?php } elseif ( in_category('play-medium') ) { ?>
           <div class="box med">
           <?php the_post_thumbnail('play-med') ?>
<?php } elseif ( in_category('play-small') ) { ?>
			<div class="box small">
			<?php the_post_thumbnail('play-small') ?>
<?php } else {}?>


<h2><?php the_title(); ?></h2>

	<div class="open" id="<?php the_ID(); ?>">
	<div class="close"> </div>
	
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	</div>

</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry dude, no posts matched your criteria.'); ?></p>
<?php endif;

wp_reset_query();
?>



<div id="next"><?php posts_nav_link(); ?></div>

</div>
</div>
</body>
</html>