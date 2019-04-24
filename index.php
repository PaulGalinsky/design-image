<?php get_header(); ?>
<main>
	<div class="container">
		<div class="content">
			<?php
				if( have_posts() ):
					while ( have_posts() ): the_post();?>
						<div <?php post_class(); ?>>
							<div class="post-primary-content">
								<div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
								<a href="<?php the_permalink(); ?>" class="post-link"></a>
							</div>
							<div class="post-secondary-content">
								<h2><?php the_title(); ?></h2>
								<p ><?php the_content(); ?></p>
								<?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
							</div>
						</div>
					<?php endwhile;
				endif;
			?>
		</div> <!-- .content -->
	</div> <!-- .container -->
</main>
<?php get_footer(); ?>