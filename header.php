<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Design Image</title>
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Lemon|PT+Sans:400,700" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="logo">
				<h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="160" height="160" alt="Design Image Logo" /></h1>
			</div><!-- .logo -->
			<div class="intro">
				<p>Hello, Paul here! I’m now half of the web and print duo <a href="https://www.lumpylemon.co.uk">Lumpy Lemon</a>, so this website is just a cheeky little showcase of some of my creative work. Enjoy!</p>
				<p>Oh, and if we haven’t spoken in a while, I’ve married, changed my surname to Galinsky and moved to Edinburgh. It’s all change!</p>
			</div> <!-- .intro -->
		</header>
