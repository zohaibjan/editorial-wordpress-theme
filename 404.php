<?php
/**
 * 404 Page Template
 *
 * @package EditorialStudio
 */

get_header();
?>

<section class="page-404">
	<div class="container">
		<h1>404</h1>
		<p>Oops! Page not found</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg">Return to Home</a>
	</div>
</section>

<?php get_footer(); ?>
