	</main><!-- .site-main -->

	<!-- Site Footer -->
	<footer class="site-footer">
		<div class="container">

			<div class="footer-grid">

				<!-- Brand Column -->
				<div class="footer-brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
						<img src="<?php echo esc_url( BH_THEME_URI . '/assets/images/placeholder.svg' ); ?>" alt="Beyond Human" class="logo-img">
						Beyond Human
					</a>
					<p>We design and build practical AI products that solve real business problems. Custom solutions for workflow automation, decision support, and intelligent tooling.</p>
				<p style="font-size:0.8rem; margin-top:0.5rem;">Suite 40, 5-7 200 Kingston Road, Slacks Creek, QLD 4124, Australia</p>
			<p style="font-size:0.8rem;"><a href="mailto:support@beyondhuman.dev" style="color:var(--muted-fg);">support@beyondhuman.dev</a></p>
			<p style="font-size:0.75rem; margin-top:0.25rem; color:hsl(215,20%,40%);">ABN 37 696 717 058</p>
			</div>

				<!-- Company Links -->
				<div class="footer-links">
					<h4>Company</h4>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services</a></li>
						<li><a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>">Case Studies</a></li>
						<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
					</ul>
				</div>

				<!-- Capabilities Links -->
				<div class="footer-links">
					<h4>Capabilities</h4>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Workflow Automation</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Decision Support</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Document Intelligence</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Custom AI Applications</a></li>
					</ul>
				</div>

			</div>

			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="footer-bottom-left">
					<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Beyond Human. All rights reserved.</p>
					<p>AI-assisted tools &mdash; verify findings with a qualified professional.</p>
				</div>
				<div class="footer-bottom-right">
					<span class="footer-follow-label">Follow us</span>
					<a href="https://www.linkedin.com/company/beyond-human-ai-dev/" target="_blank" rel="noopener noreferrer" class="btn-follow-linkedin" aria-label="Follow Beyond Human on LinkedIn">
						<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
						<span class="sr-only">LinkedIn</span>
					</a>
				</div>
			</div>

		</div>
	</footer>

</div><!-- .site-wrapper -->

<?php wp_footer(); ?>
</body>
</html>
