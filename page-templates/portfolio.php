<?php
/*
Template Name: Portfolio
*/
get_header(); ?>

<section>
  <?php while ( have_posts() ) : the_post(); ?>
	<article class="sezione">
    <div class="linea">
      <h1 class="title"><?php the_title(); ?></h1>
    </div>
    <div class="testo">
      <?php the_content(); ?>
    </div>

    <!-- Griglia Portfolio -->

    <div class="griglia-portfolio">
      <?php $args = array(
          'post_type' => 'portfolio',
          'posts_per_page' => 50
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $id = $post->ID;
          $categories = get_the_category($id);

      ?>
      <div class="box-portfolio">
        <div class="image-wrapper overlay-fade-in">
          <a href="<?php echo get_the_permalink(); ?>">
            <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('portfolio');
            } ?>
            <div class="image-overlay-content">
              <h2><?php echo get_the_title(); ?></h2>
              <h4 class="hide-for-small-only">data: <span><?php echo get_the_date('j F Y'); ?></span></h4>
              <h4 class="categorie hide-for-small-only">categorie:
                <?php
                $categories = get_the_category();
                $i = 0;
                $total = count($post);
                foreach  ($categories as $cat) {
                  $i++;
                  ?>
                  <span>
                  <?php
                    if ($i == $total){
                      echo $cat->cat_name;
                    }
                    if ($i != $total)
                    {
                      echo " - ".$cat->cat_name;
                    }
                  ?>
                  </span>
                  <?php
                  $i++;
                }
                ?>
                </h4>
            </div>
          </a>
        </div>
  		</div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </article>
  <?php endwhile;?>
</section>
<?php get_footer();
