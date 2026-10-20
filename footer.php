	</main><!-- .site-main -->

	<!-- Site Footer -->
	<footer class="site-footer">
		<div class="container">

			<div class="footer-grid">

				<!-- Brand Column -->
				<div class="footer-brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
						<img src="<?php echo esc_url( BH_THEME_URI . '/assets/images/placeholder.svg' ); ?>" alt="Editorial Studio" class="logo-img">
						Editorial Studio
					</a>
					<p>We design and build practical AI products that solve real business problems. Custom solutions for workflow automation, decision support, and intelligent tooling.</p>
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
					<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Editorial Studio. All rights reserved.</p>
					<p>AI-assisted tools &mdash; verify findings with a qualified professional.</p>
				</div>
			</div>

		</div>
	</footer>

</div><!-- .site-wrapper -->

<?php wp_footer(); ?>
</body>
</html>
