<?php get_header(); ?>
<main>
	<div class="container">
	<div class="content">
			<?php
				if( have_posts() ):
					while ( have_posts() ): the_post();?>
						<article <?php post_class(); ?>>

							<div class="post-primary-content">
								<div class="featured-image">
									<?php the_post_thumbnail('medium'); ?>
								</div>
							</div>

							<div class="post-secondary-content">
								<h2><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
								<?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
							</div>

						</article><!-- post_class() -->

						<div class="post-navigation">
							<div class="prev">
								<?php previous_post_link('%link', 'Older Work' ); ?>
							</div>
							<div class="next">
								<?php next_post_link('%link', 'Newer Work'); ?>
							</div>
						</div>

					<?php endwhile;
				endif;
			?>
		</div> <!-- .content -->

	</div><!-- .container -->
</main>
<?php get_footer(); ?>