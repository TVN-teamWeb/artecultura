<?php
/*
Template Name: Blog
*/
get_header(); ?>

<section class="blog">
	<article class="sezione">
    <div class="linea">
      <h1 class="title">blog</h1>
    </div>
      <div class="blog-grid">
        <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => 40
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
            $id = $post->ID;
            $categories = get_the_category($id);
        ?>

          <div class="blog-box">
            <figure>
              <a href="<?php the_permalink(); ?>">
                <?php
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail('blog');
                } ?>
              </a>
            </figure>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="testo">
              <a href="<?php the_permalink(); ?>">
                <?php the_content(); ?>
              </a>
            </div>
            <div class="blog-date">
              <?php echo get_the_date('d-m-Y'); ?>
            </div>
          </div>
    <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>
    </div>
  </article>
</section>

<?php get_footer();
