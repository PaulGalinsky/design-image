<?php get_header(); ?>
<main>
	<div class="intro">
		<p>Hello, Paul here! I’m now half of the web and print duo <a href="https://www.lumpylemon.co.uk">Lumpy Lemon</a>, so this website is just a cheeky little showcase of some of my creative work. Enjoy!</p>
		<p>Oh, and if we haven’t spoken in a while, I’ve married, changed my surname to Galinsky and moved to Edinburgh. It’s all change!</p>
	</div> <!-- .intro -->
	<div class="content">
		<p>Post previews start here</p>

		<?php
if( have_posts() ):
	while ( have_posts() ): the_post();?>

		<div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
		<?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
		<a href="<?php the_permalink(); ?>" class="post-link"></a>

		<?php
			if( is_home() ):
				?><hr><?php
			endif;
		?>
	<?php endwhile;
endif;
?>



	</div>
</main>
<?php get_footer(); ?>