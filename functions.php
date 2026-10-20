<?php
/**
 * Editorial Studio Theme Functions
 *
 * @package EditorialStudio
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BH_THEME_VERSION', '1.0.0' );
define( 'BH_THEME_DIR', get_template_directory() );
define( 'BH_THEME_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function editorialstudio_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 32,
		'width'       => 32,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	register_nav_menus( array(
		'primary'    => __( 'Primary Navigation', 'editorialstudio' ),
		'footer'     => __( 'Footer Navigation', 'editorialstudio' ),
	) );
}
add_action( 'after_setup_theme', 'editorialstudio_setup' );

/**
 * Enqueue Styles & Scripts
 */
function editorialstudio_scripts() {
	// Google Fonts - Inter & JetBrains Mono
	wp_enqueue_style(
		'editorialstudio-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap',
		array(),
		null
	);

	// Theme stylesheet
	wp_enqueue_style(
		'editorialstudio-style',
		get_stylesheet_uri(),
		array( 'editorialstudio-fonts' ),
		BH_THEME_VERSION
	);

	// Theme JavaScript
	wp_enqueue_script(
		'editorialstudio-main',
		BH_THEME_URI . '/assets/js/main.js',
		array(),
		BH_THEME_VERSION,
		true
	);

	// Contact form nonce
	if ( is_page_template( 'page-contact.php' ) || is_page( 'contact' ) ) {
		wp_localize_script( 'editorialstudio-main', 'bh_ajax', array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'nonce'    => wp_create_nonce( 'bh_contact_nonce' ),
		) );
	}
}
add_action( 'wp_enqueue_scripts', 'editorialstudio_scripts' );

/**
 * Custom Nav Walker for header navigation
 */
class BH_Nav_Walker extends Walker_Nav_Menu {
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$active  = in_array( 'current-menu-item', $classes ) ? ' active' : '';

		$output .= '<a href="' . esc_url( $item->url ) . '" class="' . esc_attr( $active ) . '">';
		$output .= esc_html( $item->title );
		$output .= '</a>';
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		// No wrapping li needed
	}

	public function start_lvl( &$output, $depth = 0, $args = null ) {}
	public function end_lvl( &$output, $depth = 0, $args = null ) {}
}

/**
 * Fallback navigation if no menu is set
 */
function editorialstudio_fallback_menu() {
	$pages = array(
		''             => 'Home',
		'about'        => 'About',
		'services'     => 'Services',
		'case-studies' => 'Case Studies',
		'blog'         => 'Blog',
		'contact'      => 'Contact',
	);

	foreach ( $pages as $slug => $title ) {
		$url    = home_url( '/' . $slug );
		$active = '';
		if ( $slug === '' && is_front_page() ) {
			$active = ' active';
		} elseif ( $slug !== '' && is_page( $slug ) ) {
			$active = ' active';
		}
		echo '<a href="' . esc_url( $url ) . '" class="' . esc_attr( $active ) . '">' . esc_html( $title ) . '</a>';
	}
}

/**
 * Handle contact form submission via AJAX
 */
function editorialstudio_handle_contact() {
	check_ajax_referer( 'bh_contact_nonce', 'nonce' );

	$name    = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
	$email   = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
	$company = sanitize_text_field( wp_unslash( $_POST['company'] ?? '' ) );
	$message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

	if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
		wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
	}

	if ( ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ) );
	}

	$to      = get_option( 'admin_email' );
	$subject = sprintf( 'New Contact Form Submission from %s', $name );
	$body    = sprintf(
		"Name: %s\nEmail: %s\nCompany: %s\n\nMessage:\n%s",
		$name,
		$email,
		$company ?: '(not provided)',
		$message
	);
	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		sprintf( 'Reply-To: %s <%s>', $name, $email ),
	);

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( array( 'message' => 'Message sent successfully.', 'name' => $name ) );
	} else {
		wp_send_json_error( array( 'message' => 'Failed to send message. Please try again.' ) );
	}
}
add_action( 'wp_ajax_editorialstudio_contact', 'editorialstudio_handle_contact' );
add_action( 'wp_ajax_nopriv_editorialstudio_contact', 'editorialstudio_handle_contact' );

/**
 * Add body classes
 */
function editorialstudio_body_classes( $classes ) {
	return $classes;
}
add_filter( 'body_class', 'editorialstudio_body_classes' );

/**
 * Register Case Study Custom Post Type
 */
function editorialstudio_register_cpts() {
	register_post_type( 'case_study', array(
		'labels'      => array(
			'name'          => 'Case Studies',
			'singular_name' => 'Case Study',
			'add_new_item'  => 'Add New Case Study',
			'edit_item'     => 'Edit Case Study',
		),
		'public'      => true,
		'has_archive' => false,
		'show_in_rest' => true,
		'rewrite'     => array( 'slug' => 'case-study', 'with_front' => false ),
		'supports'    => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
		'menu_icon'   => 'dashicons-portfolio',
	) );
}
add_action( 'init', 'editorialstudio_register_cpts' );

/**
 * Comprehensive SEO: meta description, canonical, Open Graph, Twitter Card, Schema.org
 */
function editorialstudio_seo_meta() {
	$site_name   = 'Editorial Studio';
	$logo_url    = get_template_directory_uri() . '/assets/images/placeholder.svg';
	$og_image    = get_template_directory_uri() . '/assets/images/placeholder.svg';
	$default_desc = 'Editorial Studio designs and delivers custom AI solutions that automate operations, improve decisions, and create measurable business outcomes. ';

	// Determine page-specific values
	if ( is_front_page() ) {
		$title       = 'Custom AI Solutions Built for Your Business | Editorial Studio';
		$description = 'Editorial Studio designs and builds custom AI applications — workflow automation, document intelligence, AI agents, and decision support tools. Based in QLD, Australia.';
		$canonical   = home_url( '/' );
		$og_type     = 'website';
	} elseif ( is_singular( 'post' ) ) {
		$title       = get_the_title() . ' | Editorial Studio';
		$excerpt     = get_the_excerpt();
		$description = $excerpt ?: wp_trim_words( wp_strip_all_tags( get_the_content() ), 28, '...' );
		$canonical   = get_permalink();
		$og_type     = 'article';
		if ( has_post_thumbnail() ) {
			$og_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
		}
	} elseif ( is_singular( 'case_study' ) ) {
		$cs_category = get_post_meta( get_the_ID(), 'cs_category', true );
		$cs_stat     = get_post_meta( get_the_ID(), 'cs_stat', true );
		$cs_img      = get_post_meta( get_the_ID(), 'cs_hero_image', true );
		$title       = get_the_title() . ' | AI Case Study | Editorial Studio';
		$excerpt     = get_the_excerpt();
		$description = $excerpt ?: 'See how Editorial Studio built ' . get_the_title() . ( $cs_stat ? ' — achieving ' . $cs_stat : '' ) . '. Custom AI solution for ' . ( $cs_category ?: 'enterprise' ) . '.';
		$canonical   = get_permalink();
		$og_type     = 'article';
		if ( $cs_img ) {
			$og_image = $cs_img;
		}
	} elseif ( is_page( 'about' ) ) {
		$title       = 'About Editorial Studio | AI Solutions Studio, QLD Australia';
		$description = 'We are a specialist AI solutions studio for businesses. We design, build, and deploy custom AI applications for forward-thinking businesses.';
		$canonical   = home_url( '/about' );
		$og_type     = 'website';
	} elseif ( is_page( 'services' ) ) {
		$title       = 'AI Development Services | Workflow Automation & Agents | Editorial Studio';
		$description = 'Custom AI development services: workflow automation, document intelligence, AI agents, decision support, and real-time processing. Brisbane & Australia-wide.';
		$canonical   = home_url( '/services' );
		$og_type     = 'website';
	} elseif ( is_page( 'contact' ) ) {
		$title       = 'Contact Editorial Studio | Book an AI Consultation';
		$description = 'Get in touch with Editorial Studio. Book a consultation to discuss your AI project. ';
		$canonical   = home_url( '/contact' );
		$og_type     = 'website';
	} elseif ( is_page( 'blog' ) ) {
		$title       = 'AI Blog & Insights | Editorial Studio';
		$description = 'Practical guides on AI agent development, LLMs, automation, cost of AI, and building applications that deliver real business results.';
		$canonical   = home_url( '/blog' );
		$og_type     = 'website';
	} elseif ( is_page( 'case-studies' ) ) {
		$title       = 'AI Case Studies | Custom AI Applications | Editorial Studio';
		$description = 'Real AI products solving real business problems. Browse our portfolio of custom AI applications across multiple industries.';
		$canonical   = home_url( '/case-studies' );
		$og_type     = 'website';
	} else {
		$title       = get_the_title() . ' | Editorial Studio';
		$description = $default_desc;
		$canonical   = get_permalink() ?: home_url( '/' );
		$og_type     = 'website';
	}

	echo "\n<!-- SEO Meta -->\n";
	echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<link rel="canonical" href="' . esc_url( $canonical ) . '">' . "\n";

	echo "\n<!-- Open Graph -->\n";
	echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '">' . "\n";
	echo '<meta property="og:type" content="' . esc_attr( $og_type ) . '">' . "\n";
	echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta property="og:url" content="' . esc_url( $canonical ) . '">' . "\n";
	echo '<meta property="og:image" content="' . esc_url( $og_image ) . '">' . "\n";
	echo '<meta property="og:locale" content="en_AU">' . "\n";

	echo "\n<!-- Twitter Card -->\n";
	echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
	echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta name="twitter:image" content="' . esc_url( $og_image ) . '">' . "\n";

	// Schema.org — Organization (every page)
	$org_schema = array(
		'@context' => 'https://schema.org',
		'@type'    => 'Organization',
		'name'     => get_bloginfo( 'name' ),
		'url'      => home_url( '/' ),
		'logo'     => $logo_url,
	);

	echo "\n<!-- Schema.org Organization -->\n";
	echo '<script type="application/ld+json">' . wp_json_encode( $org_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";

	// Schema.org — Article (blog posts only)
	if ( is_singular( 'post' ) ) {
		$article_schema = array(
			'@context'        => 'https://schema.org',
			'@type'           => 'Article',
			'headline'        => get_the_title(),
			'description'     => $description,
			'url'             => $canonical,
			'datePublished'   => get_the_date( 'c' ),
			'dateModified'    => get_the_modified_date( 'c' ),
			'image'           => $og_image,
			'author'          => array(
				'@type' => 'Organization',
				'name'  => 'Editorial Studio',
				'url'   => home_url( '/' ),
			),
			'publisher'       => array(
				'@type' => 'Organization',
				'name'  => 'Editorial Studio',
				'logo'  => array(
					'@type' => 'ImageObject',
					'url'   => $logo_url,
				),
			),
			'mainEntityOfPage' => array(
				'@type' => 'WebPage',
				'@id'   => $canonical,
			),
		);

		echo "\n<!-- Schema.org Article -->\n";
		echo '<script type="application/ld+json">' . wp_json_encode( $article_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
	}
}
add_action( 'wp_head', 'editorialstudio_seo_meta', 1 );

/**
 * Disable emoji scripts (performance)
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Clean up wp_head
 */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

