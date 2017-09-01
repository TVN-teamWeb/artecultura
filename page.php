<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 pippo
 <section>
   <?php while ( have_posts() ) : the_post(); ?>
 	<article class="sezione">
     <div class="linea">
       <h1 class="title"><?php the_title(); ?></h1>
     </div>
     <div class="testo">
       <?php the_content(); ?>
     </div>
   </article>
   <?php endwhile;?>
 </section>

 <?php get_footer();
