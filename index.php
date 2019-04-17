<?php get_header(); ?>
<main>

	<div class="content">
		<?php
			if( have_posts() ):
				while ( have_posts() ): the_post();?>
					<div <?php post_class(); ?>>
						<div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
						<?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
						<a href="<?php the_permalink(); ?>" class="post-link"></a>
					</div>
				<?php endwhile;
			endif;
		?>
	</div> <!-- .content -->
</main>
<?php get_footer(); ?>