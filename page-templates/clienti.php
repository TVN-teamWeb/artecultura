<?php
/*
Template Name: Clienti
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

    <!-- Griglia loghi -->

    <div class="griglia">
      <?php $args = array(
          'post_type' => 'clienti',
          'posts_per_page' => 10
        );

      $the_query = new WP_Query( $args );
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
          $image = get_field('logo');
          $link =get_field('link');
          if( !empty($image) ): ?>
            <div class="box-clienti">
        				<a href="<?php echo $link; ?>" target="_blank">
        					<img src="<?php echo $image['url']; ?>" />
        				</a>
                <h4><?php echo get_the_title(); ?></h4>
        		</div>
            <?php
          endif;
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </article>
  <?php endwhile;?>
</section>
<?php get_footer();
