<?php
/*
Template Name: Newsletter
*/
get_header(); ?>
<section>
  <?php while ( have_posts() ) : the_post(); ?>
	<article class="sezione">
    <div class="linea">
      <h1 class="title"><?php the_title(); ?></h1>
    </div>

    <div class="testo-newsletter">
      <?php the_content(); ?>
    </div>





  </article>
  <?php endwhile;?>
</section>

<?php get_footer();
