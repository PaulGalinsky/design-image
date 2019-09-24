<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> id="site">
		<header>
			<div class="container">
				<div class="logo">
					<h1>
						<a href="<?php echo site_url(); ?>" rel="home" title="Link to <?php bloginfo( 'name' ); ?> homepage" aria-label="Link to <?php bloginfo( 'name' ); ?> homepage">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="160" height="160" alt="Design Image Logo" />
						</a>
					</h1>
				</div><!-- .logo -->
				<?php if ( is_home() ) : echo	'
					<div class="intro">
						<p>Hi, I\'m Paul Galinsky, a print and web designer, project manager, and junior level web developer, living in Edinburgh.</p>
						<p>I built this site to practice WordPress theme development and display a little of my print portfolio. I\'m currently half of the magnificent web and print duo <a href="https://www.lumpylemon.co.uk">Lumpy Lemon</a>.</p>
					</div>
				'; endif; ?>


			</div><!-- .container -->
		</header>
