<?php
/**
 * Template Name: Contact Page
 *
 * @package BeyondHuman
 */

get_header();
?>

<!-- Hero -->
<section class="hero">
	<div class="container">
		<h1>Get in <span class="text-gradient">Touch</span></h1>
		<p>We&rsquo;d love to hear about your challenge. Send us a message on LinkedIn or email us at <a href="mailto:support@beyondhuman.dev" style="color:inherit; text-decoration:underline;">support@beyondhuman.dev</a> and we&rsquo;ll get back to you within one business day.</p>
	</div>
</section>

<!-- Contact Section -->
<section class="section">
	<div class="container">
		<div style="max-width:640px; margin:0 auto; display:flex; flex-direction:column; gap:1.5rem;">

			<!-- LinkedIn CTA Card -->
			<div class="card card-glow" style="padding:2.5rem; text-align:center;">
				<div class="card-icon" style="margin:0 auto 1.5rem;">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
				</div>
				<h2 style="margin-bottom:0.75rem;">Message Us on <span class="text-gradient">LinkedIn</span></h2>
				<p style="color:var(--muted-fg); margin-bottom:2rem;">The fastest way to reach us. Tell us about your business, your challenge, and what you&rsquo;re hoping AI can help you achieve. We respond to every message.</p>
				<a href="https://www.linkedin.com/company/beyond-human-ai-dev/" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg" style="display:inline-flex; align-items:center; gap:0.5rem;">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
					Open LinkedIn
				</a>
			</div>

			<!-- Email CTA Card -->
		<div class="card" style="padding:2.5rem; text-align:center;">
			<div class="card-icon" style="margin:0 auto 1.5rem;">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
			</div>
			<h2 style="margin-bottom:0.75rem;">Email <span class="text-gradient">Us</span></h2>
			<p style="color:var(--muted-fg); margin-bottom:2rem;">Prefer email? Drop us a line and we&rsquo;ll get back to you within one business day.</p>
			<a href="mailto:support@beyondhuman.dev" class="btn btn-secondary btn-lg" style="display:inline-flex; align-items:center; gap:0.5rem;">
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
				support@beyondhuman.dev
			</a>
		</div>

		<!-- Info Cards -->
			<div class="card contact-info-card">
				<div class="contact-info-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
				</div>
				<div>
				<div class="contact-info-label">Location</div>
				<div class="contact-info-value">Suite 40, 5-7 200 Kingston Road, Slacks Creek, 4124, QLD, Australia</div>
				</div>
			</div>

			<div class="card contact-info-card">
				<div class="contact-info-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
				</div>
				<div>
					<div class="contact-info-label">Response Time</div>
					<div class="contact-info-value">Within one business day</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>
