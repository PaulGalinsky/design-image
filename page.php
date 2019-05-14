<?php get_header(); ?>
<main>
	<div class="container">
		<div class="content">
			<?php
				if( have_posts() ):
					while ( have_posts() ): the_post();?>
						<div <?php post_class(); ?>>
							<div class="page-content">
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</div><!-- page-content -->
						</div><!-- post_class() -->
					<?php endwhile;
				endif;
			?>
		</div> <!-- .content -->
	</div><!-- .container -->
</main>
<?php get_footer(); ?>