<?php get_header(); ?>
<main>
	<div class="container">
		<div class="content">
			<?php
				if( have_posts() ): ?>
						<h2 class="tag"><?php single_tag_title('Here\'s everything tagged \'<span class="the-tag">'); ?></span>'. Enjoy:</h2>
				<?php
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
								<a href="<?php the_permalink(); ?>" class="read-more"><h2><?php the_title(); ?></h2></a>
								<p><?php echo get_first_paragraph(); ?></p>
								<a href="<?php the_permalink(); ?>" class="read-more"> >> Read more >> </a>
								<?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
							</div>
						</div>
					<?php endwhile;
				endif;
			?>
			<div class="post-navigation">
				<p><?php posts_nav_link(' || ',' &laquo; Go
Forward In Time','Go Back in Time &raquo; '); ?></p>
			</div>
		</div> <!-- .content -->
	</div> <!-- .container -->
</main>
<?php get_footer(); ?>