<?php
/**
 * Single Post Template
 * Displays individual blog articles
 *
 * @package EditorialStudio
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Article Hero -->
<section class="hero" style="padding-bottom:2rem;">
	<div class="container" style="max-width:52rem;">
		<div class="hero-badge">
			<span class="badge">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
				<?php
				$categories = get_the_category();
				if ( ! empty( $categories ) ) {
					echo esc_html( $categories[0]->name );
				} else {
					echo 'AI Insights';
				}
				?>
			</span>
		</div>
		<h1><?php the_title(); ?></h1>
		<div class="blog-meta">
			<span>
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
				<?php echo esc_html( get_the_date( 'F j, Y' ) ); ?>
			</span>
			<span>
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
				<?php
				$content    = get_the_content();
				$word_count = str_word_count( wp_strip_all_tags( $content ) );
				$read_time  = max( 1, (int) ceil( $word_count / 200 ) );
				echo esc_html( $read_time ) . ' min read';
				?>
			</span>
		</div>
	</div>
</section>

<!-- Featured Image -->
<?php if ( has_post_thumbnail() ) : ?>
<div style="max-width:52rem; margin:0 auto 0; padding:0 1rem;">
	<?php the_post_thumbnail( 'large', array(
		'style' => 'width:100%; height:auto; border-radius:var(--radius); display:block;',
		'alt'   => esc_attr( get_the_title() ),
	) ); ?>
</div>
<?php endif; ?>

<!-- Article Content -->
<section class="section" style="padding-top:2rem;">
	<div class="container" style="max-width:52rem;">
		<article class="blog-article" itemscope itemtype="https://schema.org/Article">
			<meta itemprop="headline" content="<?php echo esc_attr( get_the_title() ); ?>">
			<meta itemprop="datePublished" content="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
			<meta itemprop="dateModified" content="<?php echo esc_attr( get_the_modified_date( 'c' ) ); ?>">
			<?php the_content(); ?>
		</article>

		<!-- Back to Blog -->
		<div style="margin-top:3rem;padding-top:2rem;border-top:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:1rem;">
			<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-secondary">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
				Back to Blog
			</a>
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">Book a Consultation</a>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
