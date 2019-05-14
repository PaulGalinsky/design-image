<?php get_header(); ?>
<main>
	<div class="container">
		<div class="content">
			<div class="page-content">
				<h2>Page not found</h2>
				<p>Well goodness, this is a shame. The page you were looking for doesn't exist!</p>
				<p>Here's a link to the <?php bloginfo( 'name' ); ?> <a href="<?php echo get_home_url(); ?>" aria-label="Link to <?php bloginfo( 'name' ); ?> homepage" rel="home" title="Link to <?php bloginfo( 'name' ); ?> homepage">homepage</a>.</p>
			</div><!-- page-content -->
		</div> <!-- .content -->
	</div><!-- .container -->
</main>
<?php get_footer(); ?>