<?php
/**
 * Default Template (fallback)
 *
 * @package BeyondHuman
 */

get_header();
?>

<section class="section">
	<div class="container" style="max-width:48rem;">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<h1><?php the_title(); ?></h1>
				<div style="margin-top:1.5rem;">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; else : ?>
			<div class="page-404" style="min-height:40vh;">
				<h2>Nothing here yet</h2>
				<p>No content found.</p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary mt-3">Return to Home</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
