	<footer>
		<div class="container">


			<div class="footer-links">
				<ul>
					<li><a class="lemon" href="https://www.lumpylemon.co.uk">My new company</a></li>
					<li><a class="email" href="mailto:paul@designimage.eu">Email me</a></li>
					<li><a class="privacy" href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
					<li><a class="top scroll_to" href="#site">Back to top</a></li>
				</ul>
			</div><!-- .footer-links -->

			<div class="logo">
				<?php if ( is_home() ) { ?>
					<a href="#site" class="scroll_to" title="Back to top" aria-label="Back to top">
				<?php } else { ?>
					<a href="<?php echo site_url(); ?>" rel="home" title="Return to the homepage" aria-label="Return to the homepage">
				<?php } ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="160" height="160" alt="Design Image Logo" aria-hidden />
				</a>
			</div><!-- .logo -->

		</div><!-- .container -->
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>