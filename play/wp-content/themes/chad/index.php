
<?php
get_header(); 
?>
<div class="content">	
<div id="play">


<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<?php if ( in_category('play-big') ) { ?>
           <div class="box big">
           <div class="play-thumb">
           <a href="<?php echo $url ?>" rel="lightbox[<?php the_ID(); ?>]"><?php the_post_thumbnail('play-big') ?></a>
           </div>
<?php } elseif ( in_category('play-med') ) { ?>
           <div class="box med">
           <div class="play-thumb">
           <a href="<?php echo $url ?>" rel="lightbox[<?php the_ID(); ?>]"><?php the_post_thumbnail('play-med') ?></a>
           </div>
<?php } elseif ( in_category('play-small') ) { ?>
			<div class="box med">
			<div class="play-thumb">
			<a href="<?php echo $url ?>" rel="lightbox[<?php the_ID(); ?>]"><?php the_post_thumbnail('play-med') ?></a>
			</div>
<?php } elseif ( in_category('video') ) { ?>
			<div class="box vid">
			<div class="play-vid">
			<iframe width="460" height="275" src="<?php echo get_post_meta($post->ID, 'video', true); ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>
			</div>

<?php } else { ?> 
	<div style="display:none;">
<?php } ?>


<h2><?php the_title(); ?></h2>

	<div class="open" id="<?php the_ID(); ?>">
	<div class="close"> </div>
	<div class="dude">
		<h2><?php the_title(); ?></h2>
		
			<?php the_post_thumbnail('play-open') ?>
	
			<?php the_content(); ?>

	</div>
	</div>
	
	<script type="text/javascript">
			$('#<?php the_ID(); ?> img').each(function(index) {
				var imageparent = $(this).parent();
				if ( !($(imageparent).is('a'))){
					var imagehref = $(this).attr('src');
					var imagecaption = $(this).attr('title');
					$(this).wrap('<a href="'+ imagehref +'" rel="lightbox[<?php the_ID(); ?>]" title="<?php the_title(); ?> - '+ imagecaption +'" />');
				}
			});

	</script>

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