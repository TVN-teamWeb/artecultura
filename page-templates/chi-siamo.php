<?php
/*
Template Name: Chi siamo
*/
get_header(); ?>

<section>
	<?php while ( have_posts() ) : the_post();
		$thumb01 = get_field('thumb-01');
		$thumb02 = get_field('thumb-02');
	?>

	<article class="sezione">
		<div class="linea">
			<h1 class="title"><?php the_title(); ?></h1>
		</div>
		<div class="testo">
			<?php the_content(); ?>
		</div>

		<div class="thumb">
			<video class="video" poster="<?php echo $thumb01['url']; ?>" controls>
				<source src="<?php echo get_bloginfo('template_url'); ?>/assets/video/Promo_TVN_Arte_Cultura-mp4.mp4" type="video/mp4">
				<source src="<?php echo get_bloginfo('template_url'); ?>/assets/video/Promo_TVN_Arte_Cultura-ogg.ogg" type="video/ogg">
				<source src="<?php echo get_bloginfo('template_url'); ?>/assets/video/Promo_TVN_Arte_Cultura-webm.webm" type="video/webm">
			</video>
		</div>

		<div class="testo">
			<?php echo the_field('testo-02'); ?>
		</div>
		<div class="thumb">
			<video class="video" poster="<?php echo $thumb02['url']; ?>" controls>
				<source src="<?php echo get_bloginfo('template_url'); ?>/assets/video/intervsta-mp4.mp4" type="video/mp4">
				<source src="<?php echo get_bloginfo('template_url'); ?>/assets/video/intervista-ogg.ogg" type="video/ogg">
				<source src="<?php echo get_bloginfo('template_url'); ?>/assets/video/intervsta-webm.webm" type="video/webm">
			</video>
		</div>
		<div class="testo">
			<?php echo the_field('testo-03'); ?>
		</div>
	</article>
	<?php endwhile;?>
</section>

<?php get_footer();
