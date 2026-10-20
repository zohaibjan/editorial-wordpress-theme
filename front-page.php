<?php
/**
 * Template Name: Home Page
 * Front Page Template
 *
 * @package EditorialStudio
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero">
	<div class="container">
		<div class="hero-badge">
			<span class="badge">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6" rx="1"/><path d="M15 2v2"/><path d="M15 20v2"/><path d="M2 15h2"/><path d="M2 9h2"/><path d="M20 15h2"/><path d="M20 9h2"/><path d="M9 2v2"/><path d="M9 20v2"/></svg>
				Custom AI Solutions
			</span>
		</div>
		<h1>Tailored AI Apps Built <span class="text-gradient">for Your Business</span></h1>
		<p>Editorial Studio designs and delivers custom AI solutions that automate operations, improve decisions, and create measurable business outcomes.</p>
		<div class="hero-actions">
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg">Book a Consultation</a>
			<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" class="btn btn-secondary btn-lg">View Case Studies</a>
		</div>
	</div>
</section>

<!-- Stats Section -->
<section class="section-sm">
	<div class="container">
		<div class="grid-4">
			<div class="stat-card animate-in">
				<div class="stat-value">18+</div>
				<div class="stat-label">AI Products Delivered</div>
			</div>
			<div class="stat-card animate-in animation-delay-1">
				<div class="stat-value">10x</div>
				<div class="stat-label">Faster Processing</div>
			</div>
			<div class="stat-card animate-in animation-delay-2">
				<div class="stat-value">99%</div>
				<div class="stat-label">Accuracy Rate</div>
			</div>
			<div class="stat-card animate-in animation-delay-3">
				<div class="stat-value">24/7</div>
				<div class="stat-label">Always Available</div>
			</div>
		</div>
	</div>
</section>

<!-- Capabilities Section -->
<section class="section">
	<div class="container">
		<div class="text-center mb-4">
			<h2>What We <span class="text-gradient">Build</span></h2>
			<p>AI-powered applications tailored to your industry and workflows.</p>
		</div>
		<div class="grid-3">

			<div class="card card-glow animate-in">
				<div class="card-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6" rx="1"/><path d="M15 2v2"/><path d="M15 20v2"/><path d="M2 15h2"/><path d="M2 9h2"/><path d="M20 15h2"/><path d="M20 9h2"/><path d="M9 2v2"/><path d="M9 20v2"/></svg>
				</div>
				<h3>Workflow Automation</h3>
				<p>Eliminate manual bottlenecks with AI-driven process orchestration tailored to your operations.</p>
			</div>

			<div class="card card-glow animate-in animation-delay-1">
				<div class="card-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
				</div>
				<h3>Document Intelligence</h3>
				<p>Extract, classify, and generate documents with NLP-powered pipelines.</p>
			</div>

			<div class="card card-glow animate-in animation-delay-2">
				<div class="card-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v16a2 2 0 0 0 2 2h16"/><path d="M7 16h8"/><path d="M7 11h12"/><path d="M7 6h3"/></svg>
				</div>
				<h3>Decision Support</h3>
				<p>Surface insights from complex data to accelerate confident decision-making.</p>
			</div>

			<div class="card card-glow animate-in animation-delay-1">
				<div class="card-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
				</div>
				<h3>Compliance &amp; Audit</h3>
				<p>Automated compliance checking against regulatory standards and internal policies.</p>
			</div>

			<div class="card card-glow animate-in animation-delay-2">
				<div class="card-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
				</div>
				<h3>Real-Time Processing</h3>
				<p>Streaming analysis for time-sensitive operations — audio, video, and sensor data.</p>
			</div>

			<div class="card card-glow animate-in animation-delay-3">
				<div class="card-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
				</div>
				<h3>Talent Intelligence</h3>
				<p>AI-powered candidate evaluation, scoring, and shortlisting at scale.</p>
			</div>

		</div>
	</div>
</section>

<!-- Case Studies Preview -->
<section class="section" style="background-color: var(--card);">
	<div class="container">
		<div class="text-center mb-4">
			<h2>Our <span class="text-gradient">Work</span></h2>
			<p>Real AI products solving real business problems.</p>
		</div>
		<div class="grid-3">

			<div class="card animate-in">
				<div class="card-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
				</div>
				<h3>SiteScribe</h3>
				<p>AI-powered site inspection reporting with defect classification and compliance checks.</p>
				<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" class="btn btn-secondary mt-3" style="width:100%;">View Case Study</a>
			</div>

			<div class="card animate-in animation-delay-1">
				<div class="card-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
				</div>
				<h3>TalentRank</h3>
				<p>Multi-criteria applicant scoring with evidence-based ranking and audit trails.</p>
				<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" class="btn btn-secondary mt-3" style="width:100%;">View Case Study</a>
			</div>

			<div class="card animate-in animation-delay-2">
				<div class="card-icon">
					<!-- Scale icon -->
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="M7 21h10"/><path d="M12 3v18"/><path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"/></svg>
				</div>
				<h3>CaseForge</h3>
				<p>Intelligent legal brief assembly with chronological fact extraction and gap analysis.</p>
				<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" class="btn btn-secondary mt-3" style="width:100%;">View Case Study</a>
			</div>

			<div class="card animate-in">
				<div class="card-icon">
					<!-- Mail icon -->
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
				</div>
				<h3>InboxPilot</h3>
				<p>Smart email triage with urgency scoring, draft replies, and action item tracking.</p>
				<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" class="btn btn-secondary mt-3" style="width:100%;">View Case Study</a>
			</div>

			<div class="card animate-in animation-delay-1">
				<div class="card-icon">
					<!-- Activity icon -->
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"/></svg>
				</div>
				<h3>VitalEdge</h3>
				<p>Predictive critical care monitoring with explainable alerts and EMR integration.</p>
				<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" class="btn btn-secondary mt-3" style="width:100%;">View Case Study</a>
			</div>

			<div class="card animate-in animation-delay-2">
				<div class="card-icon">
					<!-- Mountain icon -->
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
				</div>
				<h3>TerraSafe</h3>
				<p>Intelligent open-pit monitoring with LiDAR analysis and real-time safety alerts.</p>
				<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" class="btn btn-secondary mt-3" style="width:100%;">View Case Study</a>
			</div>

		</div>
		<div class="text-center mt-3">
			<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" class="btn btn-primary">View All 18 Case Studies</a>
		</div>
	</div>
</section>

<!-- CTA Section -->
<section class="cta-section">
	<div class="container">
		<div class="cta-box">
			<h2>Ready to Build Something <span class="text-gradient">Extraordinary</span>?</h2>
			<p>Let&rsquo;s discuss how custom AI can transform your operations.</p>
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg">Book a Consultation</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
