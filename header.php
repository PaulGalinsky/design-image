<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Lemon" rel="stylesheet">
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
						<p>Hello, Paul here! I’ve retired designimage.eu and am now half of the magnificent web and print duo <a href="https://www.lumpylemon.co.uk">Lumpy Lemon</a>.</p>
						<p>Oh, and if we haven’t spoken in a while, I’ve married, changed my surname to Galinsky and moved to Edinburgh. It’s all change!</p>
					</div>
				'; endif; ?>


			</div><!-- .container -->
		</header>
