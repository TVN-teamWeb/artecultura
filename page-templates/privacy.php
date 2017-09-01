<?php
/*
Template Name: Privacy
*/
get_header(); ?>

<div id="content-page" role="main">
  <?php while ( have_posts() ) : the_post(); ?>
  	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
  			<header>
  					<h1 class="entry-title"><?php the_title(); ?></h1>
  			</header>
        <?php the_content(); ?>
  	</article>
  <?php endwhile;?>

</div>

<?php get_footer();
