<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dopetrope by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class('homepage is-preload') ?>>
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						if ( has_custom_logo() ) {
						echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
						} else {
						echo '<h1>' . get_bloginfo('name') . '</h1>';
						echo '<small>' . get_bloginfo('description') . '</small>';
					}
					?>


					<!-- Nav -->
						<nav id="nav">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'container'	=> ''
										)
								);
							?>
						</nav>
                </section>