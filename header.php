<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Editorial Studio">
	<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder.svg' ); ?>">
	<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder.svg' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="site-wrapper" style="min-height:100vh;display:flex;flex-direction:column;">

	<!-- Site Header -->
	<header class="site-header" id="site-header">
		<div class="container">
			<div class="header-inner">

					<!-- Logo -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
			<img src="<?php echo esc_url( BH_THEME_URI . '/assets/images/placeholder.svg' ); ?>" alt="Editorial Studio" class="logo-img">
				Editorial Studio
			</a>

				<!-- Desktop Navigation -->
				<nav class="nav-desktop" aria-label="Primary Navigation">
					<?php
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container'      => false,
							'items_wrap'     => '%3$s',
							'walker'         => new BH_Nav_Walker(),
						) );
					} else {
						editorialstudio_fallback_menu();
					}
					?>
				</nav>

				<!-- CTA -->
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary header-cta">Book a Consultation</a>

				<!-- Mobile Menu Toggle -->
				<button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle navigation" aria-expanded="false">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
				</button>

			</div>

			<!-- Mobile Menu -->
			<nav class="mobile-menu" id="mobile-menu" aria-label="Mobile Navigation">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'container'      => false,
						'items_wrap'     => '%3$s',
						'walker'         => new BH_Nav_Walker(),
					) );
				} else {
					editorialstudio_fallback_menu();
				}
				?>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary mt-2">Book a Consultation</a>
			</nav>
		</div>
	</header>

	<!-- Main Content -->
	<main class="site-main" style="flex:1;">
