<?php

get_header(); ?>


<!-- RACCONTARE, PROMUOVERE. CONDIVIDERE -->
<section id="video">
	<article>
		<div class="linea">
			<h1 class="title">raccontare. promuovere. condividere</h1>
		</div>
		<div class="testo">
			<p><b>TVN Media Group</b>, società leader in Italia nel settore dell’advertising e della comunicazione, è lieta di presentare la sua nuova divisione Arte e Cultura. Da sempre attenta ai più importanti eventi culturali e dello spettacolo, TVN Media Group attraverso le proprie testate giornalistiche periodiche come Pubblicità Italia e Advertiser e soprattutto con Televisionet, la prima web tv italiana, ha con interesse documentato e promosso l’attività culturale italiana, stabilendo contatti e rapporti di collaborazione con i più prestigiosi musei e istituzioni nazionali pubbliche e private.</p>
			<p><b>TVN Media Group - Arte e Cultura</b> è un gruppo coordinato di professionisti, esperti della comunicazione del marketing, che opera al servizio delle più attuali esigenze della promozione culturale fornendo consulenza strategica per l’ideazione e la pianificazione di campagne multimediali integrate.</p>
		</div>
		<!-- 3 box video -->
		<div id="video-hp">
			<div class="box-video">
				<div class="image-wrapper overlay-fade-in">
					<a href="#">
						<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/video-01.jpg">
							<h3 class="text-over">fully responsive</h3>
						<div class="image-overlay-content">
							<h3 class="text-over">fully responsive</h3>
						</div>
					</a>
				</div>
			</div>
			<div class="box-video">
				<div class="image-wrapper overlay-fade-in">
					<a href="#">
						<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/video-02.jpg">
						<h3 class="text-over">stelish design</h3>
							<div class="image-overlay-content">
						<h3 class="text-over">stelish design</h3>
					</div>
					</a>
				</div>
			</div>
			<div class="box-video">
				<div class="image-wrapper overlay-fade-in">
					<a href="#">
						<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/video-03.jpg">
						<h3 class="text-over">extensive design</h3>
					<div class="image-overlay-content">
						<h3 class="text-over">extensive design</h3>
					</div>
					</a>
				</div>
			</div>
		</div>
	</article>
</section>


<!-- SERVIZI -->
<section id="servizi">
	<article>
		<div class="linea">
			<h1 class="title grey">servizi</h1>
		</div>
		<div class="servizi">
			<div class="column">
				<div class="circle">
					<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/Icone_Lavori_1.png" alt="">
				</div>
				<div class="info">
					<h3>video editing</h3>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
				</div>
			</div>
			<div class="column">
				<div class="circle">
					<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/Icone_Lavori_1.png" alt="">
				</div>
				<div class="info">
					<h3>media</h3>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
				</div>
			</div>
			<div class="column">
				<div class="circle">
					<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/Icone_Lavori_1.png" alt="">
				</div>
				<div class="info">
					<h3>ricerca</h3>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
				</div>
			</div>
		</div>
		<div id="categories">
			<div class="box-categories">
				<ul>
					<?php
						$args = array(
							'echo'                => 1,
							'exclude'             => 1,
							'category__not_in' => array( 1 ),
							'hide_empty'          => 0,
							'hide_title_if_empty' => false,
							'hierarchical'        => true,
							'order'               => 'ASC',
							'orderby'             => 'name',
							'taxonomy'            => 'category',
						);
						$categories = get_categories( $args );
						foreach ( $categories as $category ) {
								echo '<li><span class="categories">' . $category->name . '</span></li>';
						}
					?>
				</ul>
			</div>
		</div>
	</article>
</section>

<!-- Immagne con descrizione -->
<section id="slide">
			<!-- img data-interchange="[<?php echo get_bloginfo('template_url');?>/assets/images/interchange/hp-s.jpg, small], [<?php echo get_bloginfo('template_url');?>/assets/images/interchange/hp-m.jpg, medium],[<?php echo get_bloginfo('template_url');?>/assets/images/interchange/hp-l.jpg, large], [<?php echo get_bloginfo('template_url');?>/assets/images/interchange/hp-xl.jpg, xlarge]" -->
			<div class="testo_slide">
				<h3>L'arte non è ciò che vedi,</h3>
				 <h3>ma ciò che fai vedere agli altri.</h3>  (Edgar Degas)
			</div>
</section>

<!-- Portfolio -->
<section id="portfolio">
	<article>
		<div class="linea">
			<h1 class="title grey">portfolio</h1>
		</div>
		<div class="testo">
			<?php
			$args = array(
					'page_id' => 9,
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post();
					$potfolio = the_excerpt();

					echo 	$portfolio;

				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
		<div id="video-hp">
			<?php $args = array(
					'post_type' => 'portfolio',
					'posts_per_page' => 3,
					'orderby' => 'post_date',
					'order' => 'DESC'
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post();
					$video_principale = get_field('video');

			?>
			<div class="box-video">
				<div class="image-wrapper show-for-small-only">
					<a href="#" onclick="popupVideo('<?php echo the_title(); ?>','<?php echo $video_principale ?>')">

							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('hp');
							}?>
							<p class="show-for-small-only"><?php echo get_the_title(); ?></p>
					</a>
				</div>



				<div class="image-wrapper overlay-fade-in hide-for-small-only">
					<a href="#" onclick="popupVideo('<?php echo the_title(); ?>','<?php echo $video_principale ?>')">

							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('hp');
							}?>
							<p class="show-for-small-only"><?php echo get_the_title(); ?></p>
								<h3 class="text-over hide-for-small-only"><?php echo get_the_title(); ?></h3>
							<div class="image-overlay-content show-for-medium">
								<h3 class="text-over "><?php echo get_the_title(); ?></h3>
						</div>
					</a>
				</div>
			</div>
			<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>


			<!-- div class="box-video">
				<div class="image-wrapper overlay-fade-in">
					<a href="#">
						<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/video-02.jpg">
						<h3 class="text-over">stelish design</h3>
					<div class="image-overlay-content">
						<h3 class="text-over">stelish design</h3>
					</div>
					</a>
				</div>
			</div>


			<div class="box-video">
				<div class="image-wrapper overlay-fade-in">
					<a href="#">
						<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/video-03.jpg">
						<h3 class="text-over">extensive design</h3>
					<div class="image-overlay-content">
						<h3 class="text-over">extensive design</h3>
					</div>
					</a>
				</div>
			</div-->
			<div id="videoModal" class="reveal large" data-reveal>
			  <h2 id="videoModalTitle"></h2>
			  <div class="flex-video widescreen">
			    <video id="videoModalFrame" type="video/mp4" src="" controls allowfullscreen data-reset-on-close></video>
			  </div>

			  <button class="close-button" data-close aria-label="Close modal" type="button" onclick="stopVideo()">
			     <span aria-hidden="true">&times;</span>
			   </button>
			</div>
		</div>
		<a href="/portfolio" class="button">show more</a>
	</article>
</section>


<!-- CLIENTI -->
<section id="clienti">
	<article>
		<div class="linea">
			<h1 class="title">clienti</h1>
		</div>
		<div class="testo">
			<?php
			$query = array(
					'page_id' => 46,
				);
				$the_query = new WP_Query( $query );
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post();
					$clienti = the_excerpt();

					echo 	$clienti;

				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
		<div class="clienti">
				<div class="responsive">
					<?php $args = array(
							'post_type' => 'clienti'
						);
						$the_query = new WP_Query( $args );
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post();
							$image = get_field('logo');
							if( !empty($image) ): ?>
								<div>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								</div>
					<?php
							endif;
						endwhile;
					endif;
					wp_reset_postdata();
				?>
				</div>
				</div>
				<a href="/clienti" class="button">show more</a>
		</div>
	</article>
</section>




	<!-- Video TVN -->

	<!-- div id="tvn-video">
		<div class="row">
			<div class="box-video">
				<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/box1.jpg">
			</div>
			<div class="box-video">
				<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/box1.jpg">
			</div>
			<div class="box-video">
				<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/box1.jpg">
			</div>
		</div>

	</div>


	<!-- News -->
	<!-- div id="news">
		<h3>news</h3>
		<div class="box-news">
			<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/news.jpg">
			<h4>titolo news 1</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="box-news">
			<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/news.jpg">
			<h4>titolo news 3</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="box-news">
			<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/news.jpg">
			<h4>titolo news 3</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div -->





<?php get_footer();
