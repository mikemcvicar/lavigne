
<?php
get_header(); 
?>
<div class="content">	
<div id="play">


<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( in_category('play-big') ) { ?>
           <div class="box big">
           <div class="play-thumb">
           <?php the_post_thumbnail('play-big') ?>
           </div>
<?php } elseif ( in_category('play-med') ) { ?>
           <div class="box med">
           <div class="play-thumb">
           <?php the_post_thumbnail('play-med') ?>
           </div>
<?php } elseif ( in_category('play-small') ) { ?>
			<div class="box small">
			<div class="play-thumb">
			<?php the_post_thumbnail('play-small') ?>
			</div>
<?php } elseif ( in_category('video') ) { ?>
			<div class="box big">
			<div class="play-vid">
			<iframe width="340" height="203" src="<?php echo get_post_meta($post->ID, 'video', true); ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>
			</div>

<?php } else { ?> 
	<div style="display:none;">
<?php } ?>


<h2><?php the_title(); ?></h2>

	<div class="open" id="<?php the_ID(); ?>">
	<div class="close"> </div>
	<div class="dude">
	<?php the_post_thumbnail('play-open') ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	</div>
	</div>

</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry man, no posts matched your criteria.'); ?></p>
<?php endif;


?>

</div>
<div class="navigation"><?php posts_nav_link(); ?></div>
</div>

</body>
</html>