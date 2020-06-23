<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><? bloginfo('name')?> - <?wp_title();?> <? the_field('title_seo');?> </title>
		<meta name"description" content="<? bloginfo('name')?> - <?wp_title('');?> <? the_field('description_seo');?> ">

		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<? echo get_stylesheet_directory_uri(); ?>/style.css">
		<? wp_head(); ?>
	</head>

	<body>

<header>
			<nav>
				<? $args = array(
					'menu' => 'principal',
					'container' => false
				);
				wp_nav_menu( $args );
				?>
			</nav>

			<h1><img src="<? echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>
			<? $contato = get_page_by_title( 'contato'); ?>	
			<p><? the_field('endereco_header', $contato); ?></p>
			<p class="telefone"><? the_field('telefone_header', $contato); ?></p>
</header>