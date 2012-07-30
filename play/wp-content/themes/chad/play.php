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

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<?php if ( in_category('play-big') ) { ?>
	
           <div class="box big">
			<a href="<?php echo $url ?>" rel="lightbox[<?php the_ID(); ?>]"><?php the_post_thumbnail('play-big') ?></a>
           
<?php } elseif ( in_category('play-medium') ) { ?>
	
           <div class="box med">
           	<a href="<?php echo $url ?>" rel="lightbox[<?php the_ID(); ?>]"><?php the_post_thumbnail('play-med') ?></a>
<?php } elseif ( in_category('play-small') ) { ?>
			<div class="box med">
				<a href="<?php echo $url ?>" rel="lightbox[<?php the_ID(); ?>]"><?php the_post_thumbnail('play-med') ?></a>
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