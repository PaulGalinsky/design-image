<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Design Image</title>
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Lemon|PT+Sans:400,700" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>
		<header>
			<h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="160" height="160" alt="Design Image Logo" /></h1>
		</header>
