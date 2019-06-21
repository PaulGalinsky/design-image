<?php get_header(); ?>
<main>
	<div class="container">
		<div class="content">
			<?php
				if( have_posts() ):
					while ( have_posts() ): the_post();?>
						<div <?php post_class(); ?>>
							<div class="post-primary-content">
								<div class="featured-image">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
									</a>
								</div>
							</div>
							<div class="post-secondary-content">
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<p><?php echo get_first_paragraph(); ?></p>
								<a href="<?php the_permalink(); ?>" class="read-more">Read more</a>
								<?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
							</div>
						</div>
					<?php endwhile;
				endif;
			?>

			<div class="post-navigation">
				<div class="prev">
						<?php if( get_next_posts_link() ) :
							next_posts_link( 'Older Work', 0 );
						endif; ?>
					</div>
					<div class="next">
						<?php if( get_previous_posts_link() ) :
							previous_posts_link( 'Newer Work' );
						endif; ?>
					</div>
				</div>
			</div>

		</div> <!-- .content -->
	</div> <!-- .container -->
</main>
<?php get_footer(); ?>