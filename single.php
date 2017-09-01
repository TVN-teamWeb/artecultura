<?php

//Single BLOG
get_header(); ?>


<section class="single-blog">

    <article class="sezione interne">
      <?php while ( have_posts() ) : the_post();?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <p class="date"><?php echo get_the_date(); ?></p>
      <?php endwhile;?>
      <div class="paginazione">
        <div class="preview little">
          <?php previous_post_link('<span class="tit-prew">preview</span><span class="prev-page">%link</span>'); ?>
        </div>
        <div class="slash">  </div>
        <div class="next little">
          <?php next_post_link('<span class="next-page">%link</span><span class="tit-next">next</span>'); ?>
        </div>
      </div>
    </article>
</section>
<?php get_footer();
