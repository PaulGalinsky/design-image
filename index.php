<?php get_header(); ?>
<main>
	<div class="container">
		<div class="content">
			<?php
				if( have_posts() ):
					while ( have_posts() ): the_post();?>
						<div <?php post_class(); ?>>
							<div class="post-primary-content">
								<!-- next two lines pull in the featured image as a background image as at https://bit.ly/2ZMtvt4 -->
								<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
								<a href="<?php the_permalink(); ?>"><div class="thumbnail-img" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div></a>
							</div>
							<div class="post-secondary-content">
								<a href="<?php the_permalink(); ?>" class="read-more"><h2><?php the_title(); ?></h2></a>
								<p><?php echo get_first_paragraph(); ?></p>
								<a href="<?php the_permalink(); ?>" class="read-more"> >> Read more >> </a>
								<?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
							</div>
						</div>
					<?php endwhile;
				endif;
			?>
			<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
		</div> <!-- .content -->
	</div> <!-- .container -->
</main>
<?php get_footer(); ?>