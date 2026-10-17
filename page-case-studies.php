<?php
/** Template Name: Case studies */
if (!defined('ABSPATH')) exit;
get_header(); ?>
<main class="container" style="padding:6rem 1.5rem"><h1>Case studies</h1>
<?php $items = new WP_Query(array('post_type' => 'case_study', 'posts_per_page' => 12, 'paged' => max(1, get_query_var('paged'))));
if ($items->have_posts()): while ($items->have_posts()): $items->the_post(); ?>
<article><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><?php the_excerpt(); ?></article>
<?php endwhile; echo paginate_links(array('total' => $items->max_num_pages)); else: ?><p>Add your own published content in WordPress.</p><?php endif; wp_reset_postdata(); ?>
</main><?php get_footer(); ?>
