<?php
/**
 * Template Name: About Page
 *
 * @package EditorialStudio
 */

get_header();
?>

<!-- Hero -->
<section class="hero">
	<div class="container">
		<h1>About <span class="text-gradient">Editorial Studio</span></h1>
		<p>We&rsquo;re a specialist AI studio that designs and builds custom applications for businesses. No off-the-shelf tools &mdash; every product is engineered around your specific workflows, data, and goals.</p>
	</div>
</section>

<!-- Mission & Approach -->
<section class="section">
	<div class="container">
		<div class="mission-grid">

			<div class="card mission-card animate-in">
				<h3>Our Mission</h3>
				<p>To make powerful AI accessible to mid-size and enterprise organisations through tailored, production-ready applications that solve real operational problems &mdash; not science projects.</p>
			</div>

			<div class="card mission-card animate-in animation-delay-1">
				<h3>Our Approach</h3>
				<p>We start with the business problem, not the technology. Through deep discovery, rapid prototyping, and iterative delivery, we build AI products that integrate seamlessly into your existing workflows.</p>
			</div>

		</div>
	</div>
</section>

<!-- Values -->
<section class="section" style="background-color: var(--card);">
	<div class="container">
		<div class="text-center mb-4">
			<h2>What We <span class="text-gradient">Stand For</span></h2>
		</div>
		<div class="values-grid">

			<div class="card animate-in">
				<div class="card-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
				</div>
				<h3>Outcome-Driven</h3>
				<p>Every product we build is measured by the business impact it delivers, not lines of code.</p>
			</div>

			<div class="card animate-in animation-delay-1">
				<div class="card-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
				</div>
				<h3>Transparency</h3>
				<p>AI should be explainable. We build systems you can understand, audit, and trust.</p>
			</div>

			<div class="card animate-in animation-delay-2">
				<div class="card-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/><path d="M9 18h6"/><path d="M10 22h4"/></svg>
				</div>
				<h3>Pragmatic Innovation</h3>
				<p>We use proven AI techniques where they work, not hype. Right tool, right problem.</p>
			</div>

			<div class="card animate-in animation-delay-3">
				<div class="card-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
				</div>
				<h3>Built to Last</h3>
				<p>Production-grade engineering with monitoring, error handling, and maintainable architecture.</p>
			</div>

		</div>
	</div>
</section>

<!-- CTA -->
<section class="cta-section">
	<div class="container">
		<div class="cta-box">
			<h2>Ready to Work <span class="text-gradient">With Us</span>?</h2>
			<p>Let&rsquo;s discuss how custom AI can transform your operations.</p>
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg">Get in Touch</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
