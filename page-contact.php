<?php
/** Template Name: Contact Page */
get_header();
?>
<section class="hero"><div class="container">
<h1>Get in <span class="text-gradient">Touch</span></h1>
</div></section>
<section class="section"><div class="container">
<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
</div></section>
<?php get_footer(); ?>
