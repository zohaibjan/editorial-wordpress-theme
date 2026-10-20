<?php
/**
 * Generic Page Template
 *
 * @package EditorialStudio
 */

get_header();
?>

<section class="section">
	<div class="container" style="max-width:48rem;">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<div class="hero" style="padding-bottom:2rem;">
					<h1><?php the_title(); ?></h1>
				</div>
				<div>
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
	</div>
</section>

<?php get_footer(); ?>
