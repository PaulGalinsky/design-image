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
								<div class="thumbnail-img" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
								<div class="navigation">
								<?php previous_post_link('&laquo; &laquo; %', '', 'yes'); ?> | <?php next_post_link('% &raquo; &raquo; ', '', 'yes'); ?>
								</div>
							</div>

							<div class="post-secondary-content">
								<h2><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
								<?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
							</div>

						</div><!-- post_class() -->
					<?php endwhile;
				endif;
			?>
		</div> <!-- .content -->

	</div><!-- .container -->
</main>
<?php get_footer(); ?>