	<footer>
		<div class="container">


			<div class="footer-links">
				<ul>
					<li><a class="lemon" href="https://www.lumpylemon.co.uk">My new company</a></li>
					<li><a class="email" href="mailto:paul@designimage.eu">Email me</a></li>
					<li><a class="privacy" href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
					<li><a class="top" href="#site">Back to top</a></li>
				</ul>
			</div><!-- .footer-links -->


			<div class="logo">
				<a href="<?php echo site_url(); ?>" rel="home" title="Return to the top of the homepage" aria-label="Return to the top of the homepage">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Design Image Logo" aria-hidden />
				</a>
			</div><!-- .logo -->


		</div><!-- .container -->
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>