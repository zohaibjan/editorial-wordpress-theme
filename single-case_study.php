<?php
/**
 * Single Case Study Template
 *
 * @package EditorialStudio
 */

get_header();

while ( have_posts() ) : the_post();
	$post_id     = get_the_ID();
	$category    = get_post_meta( $post_id, 'cs_category', true )    ?: 'AI Solution';
	$stat        = get_post_meta( $post_id, 'cs_stat', true );
	$tags_raw    = get_post_meta( $post_id, 'cs_tags', true );
	$hero_image  = get_post_meta( $post_id, 'cs_hero_image', true );
	$results_raw = get_post_meta( $post_id, 'cs_results', true );
	$results     = $results_raw ? json_decode( $results_raw, true ) : array();
	$tags        = $tags_raw ? array_map( 'trim', explode( ',', $tags_raw ) ) : array();
?>

<!-- Case Study Hero -->
<section class="hero" style="padding-bottom:2.5rem;">
	<div class="container" style="max-width:56rem;">
		<div class="hero-badge">
			<span class="badge">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/></svg>
				<?php echo esc_html( $category ); ?>
			</span>
		</div>
		<h1><?php the_title(); ?></h1>
		<?php if ( $stat ) : ?>
		<div style="display:inline-flex;align-items:center;gap:0.5rem;margin:1rem 0 1.25rem;padding:0.75rem 1.5rem;background:linear-gradient(135deg,hsla(213,94%,42%,0.1),hsla(256,80%,55%,0.1));border:1px solid hsla(213,94%,42%,0.25);border-radius:9999px;font-size:1.125rem;font-weight:700;color:var(--primary);">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
			<?php echo esc_html( $stat ); ?>
		</div>
		<?php endif; ?>
		<p style="font-size:1.125rem;max-width:42rem;margin:0 auto;"><?php echo esc_html( get_the_excerpt() ); ?></p>
	</div>
</section>

<!-- Hero Image -->
<?php if ( $hero_image ) : ?>
<div style="max-width:72rem;margin:0 auto 0;padding:0 1.5rem;">
	<img
		src="<?php echo esc_url( $hero_image ); ?>"
		alt="<?php echo esc_attr( get_the_title() ); ?> — Editorial Studio AI case study"
		style="width:100%;height:420px;object-fit:cover;border-radius:calc(var(--radius)*2);display:block;box-shadow:0 12px 40px rgba(0,0,0,0.14);"
		loading="eager"
	/>
</div>
<?php endif; ?>

<!-- Article Content -->
<section class="section" style="padding-top:3rem;">
	<div class="container" style="max-width:52rem;">
		<article class="blog-article">
			<?php the_content(); ?>
		</article>

		<!-- Results Grid -->
		<?php if ( ! empty( $results ) ) : ?>
		<div style="margin:3rem 0 2rem;">
			<h2 style="margin-bottom:1.5rem;">By the <span class="text-gradient">Numbers</span></h2>
			<div class="grid-4">
				<?php foreach ( $results as $result ) : ?>
				<div class="card stat-card" style="border-left:3px solid var(--primary);">
					<div class="stat-value"><?php echo esc_html( $result['value'] ); ?></div>
					<div class="stat-label"><?php echo esc_html( $result['label'] ); ?></div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php endif; ?>

		<!-- Tech Stack -->
		<?php if ( ! empty( $tags ) ) : ?>
		<div style="margin:2rem 0;padding:1.5rem;background:var(--card);border-radius:calc(var(--radius)*1.5);border:1px solid var(--border);box-shadow:0 1px 4px rgba(0,0,0,0.05);">
			<div style="font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--muted-fg);margin-bottom:0.75rem;">Technology Stack</div>
			<div class="tech-tags">
				<?php foreach ( $tags as $tag ) : ?>
				<span class="tech-tag"><?php echo esc_html( $tag ); ?></span>
				<?php endforeach; ?>
			</div>
		</div>
		<?php endif; ?>

		<!-- Navigation -->
		<div style="margin-top:3rem;padding-top:2rem;border-top:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:1rem;">
			<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" class="btn btn-secondary">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
				All Case Studies
			</a>
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">Book a Consultation</a>
		</div>
	</div>
</section>

<!-- Related Case Studies -->
<?php
$related = new WP_Query( array(
	'post_type'      => 'case_study',
	'posts_per_page' => 3,
	'post__not_in'   => array( $post_id ),
	'orderby'        => 'rand',
) );
if ( $related->have_posts() ) :
?>
<section class="section" style="padding-top:0;background-color:var(--card);">
	<div class="container">
		<h2 style="margin-bottom:2rem;">More <span class="text-gradient">Case Studies</span></h2>
		<div class="grid-3">
			<?php while ( $related->have_posts() ) : $related->the_post();
				$rel_cat  = get_post_meta( get_the_ID(), 'cs_category', true );
				$rel_stat = get_post_meta( get_the_ID(), 'cs_stat', true );
				$rel_img  = get_post_meta( get_the_ID(), 'cs_hero_image', true );
			?>
			<div class="card card-glow cs-card">
				<?php if ( $rel_img ) : ?>
				<img
					src="<?php echo esc_url( $rel_img ); ?>"
					alt="<?php the_title_attribute(); ?>"
					style="width:100%;height:160px;object-fit:cover;border-radius:calc(var(--radius)*1.2);margin-bottom:1rem;"
					loading="lazy"
				/>
				<?php endif; ?>
				<div class="case-study-label"><?php echo esc_html( $rel_cat ); ?></div>
				<h3><?php the_title(); ?></h3>
				<?php if ( $rel_stat ) : ?>
				<div class="cs-stat"><?php echo esc_html( $rel_stat ); ?></div>
				<?php endif; ?>
				<a href="<?php the_permalink(); ?>" class="btn btn-secondary mt-3" style="width:100%;">View Case Study</a>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<?php endif; ?>

<!-- CTA -->
<section class="cta-section">
	<div class="container">
		<div class="cta-box">
			<h2>Want Results Like <span class="text-gradient">This</span>?</h2>
			<p>Tell us your challenge. We&rsquo;ll design a custom AI solution for your business.</p>
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg">Book a Consultation</a>
		</div>
	</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
