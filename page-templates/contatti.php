<?php
/*
Template Name: Contatti
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

    <div class="griglia">
      <div class="box-contatti">
          <ul>
            <li><b>Stefano Sbarbaro</b></li>
            <li>Coordinatore di divisione Arte e Cultura</li>
            <li><a href="mailto:stefano.sbarbaro@tvnmediagroup.it">stefano.sbarbaro@tvnmediagroup.it</a></li>
          </ul>
      </div>
      <div class="box-contatti">
        <ul>
          <li><b>Maria Grazia Drago</b></li>
          <li>Direzione Generale – marketing</li>
          <li><a href="mailto:mariagrazia.drago@tvnmediagroup.it">mariagrazia.drago@tvnmediagroup.it</a></li>
        </ul>
      </div>
      <div class="box-contatti">
        <ul>
          <li><b>Sara Moffa</b></li>
          <li>xxxxxxxxxxxx</li>
          <li><a href="mailto:sara.moffa@tvnmediagroup.it">sara.moffa@tvnmediagroup.it</a></li>
        </ul>
      </div>
    </div>
  </article>
  <?php endwhile;?>
</section>

<?php get_footer();
