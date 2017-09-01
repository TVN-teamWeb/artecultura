<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<section>
  <?php while ( have_posts() ) : the_post();

  //CREDITS
    $agenzia        = get_field('agenzia');
    $produzione     = get_field('produzione');
    $regia          = get_field('regia');
    $voce_recitante = get_field('voce_recitante');

    //video principale
    $thumb_principale = get_field('thumb_principale');
    $video_principale = get_field('video');

    //Video secondari
    $thumb_video_ex01 = get_field('thumb_extra01');
    $thumb_video_ex02 = get_field('thumb_extra02');

    $video_ex01 = get_field('video_extra01');
    $video_ex02 = get_field('video_extra02');

  ?>
	<article class="sezione interne">
    <div class="linea">
      <h1 class="title"><?php the_title(); ?></h1>
    </div>
		<div class="categoria">
			<h4>categoria |
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
			}
			?>
			</h4>
		</div>


<!-- Inizio blocco video trailer + credits  -->

		<div class="video-credits">
			<div class="box-credits show-for-medium">
          <div class="info">
            <?php if( !empty($agenzia) ): ?>
    					<h4 class="red">agenzia</h4>
    					<h4 ><?php echo $agenzia; ?></h4>
            <?php endif; ?>
  				</div>
  				<div class="info">
            <?php if( !empty($produzione) ): ?>
    					<h4 class="red">poduzione</h4>
    					<h4><?php echo $produzione; ?></h4>
            <?php endif; ?>
  				</div>
  				<div class="info">
            <?php if( !empty($regia) ): ?>
    					<h4 class="red">regia</h4>
    					<h4><?php echo $regia ; ?></h4>
            <?php endif; ?>
  				</div>
  				<div class="info">
            <?php if( $voce_recitante != '' ){ ?>
    					<h4 class="red">voce recitante</h4>
    					<h4><?php echo $voce_recitante; ?></h4>
            <?php } ?>
  				</div>
        </div>


			<div class="box-video">
      <a href="#" onclick="popupVideo('<?php echo the_title(); ?>','<?php echo $video_principale ?>')">
          <?php
          if( !empty($thumb_principale) ): ?>
          	<img src="<?php echo $thumb_principale['url']; ?>" alt="<?php echo $thumb_principale['alt']; ?>" data-toggle="trailer-principale"/>
            <p>Trailer istituzionale</p>
          <?php endif; ?>
        </a>
			</div>

      <!-- ONLY FOR SMALL -->
      <div class="box-credits-small show-for-small-only">
        <div class="info">
          <?php if( !empty($agenzia) ): ?>
  					<h4 class="red">agenzia</h4>
  					<h4 ><?php echo $agenzia; ?></h4>
          <?php endif; ?>
				</div>
				<div class="info">
          <?php if( !empty($produzione) ): ?>
  					<h4 class="red">poduzione</h4>
  					<h4><?php echo $produzione; ?></h4>
          <?php endif; ?>
				</div>
				<div class="info">
          <?php if( !empty($regia) ): ?>
  					<h4 class="red">regia</h4>
  					<h4><?php echo $regia ; ?></h4>
          <?php endif; ?>
				</div>
				<div class="info">
          <?php if( $voce_recitante != '' ){ ?>
  					<h4 class="red">voce recitante</h4>
  					<h4><?php echo $voce_recitante; ?></h4>
          <?php } ?>
				</div>
      </div>
    </div>
<!-- Fine blocco video trailer + credits  -->


<div class="video-extra align-justify">
  <?php if(  (!empty($thumb_video_ex01)) && (!empty($thumb_video_ex02))) { ?>
    <div class="video-thumb column small-12 medium-6 large-6">
      <a href="#" onclick="popupVideo('<?php echo the_title(); ?>','<?php echo $video_ex01 ?>')">
        <?php
        if( !empty($thumb_video_ex01) ): ?>
          <img src="<?php echo $thumb_video_ex01['url']; ?>" alt="<?php echo $thumb_video_ex01['alt']; ?>" data-toggle="trailer-principale"/>
          <p>spot ufficiale</p>
        <?php endif; ?>
        </a>
    </div>
    <div class="video-thumb column small-12 medium-6 large-6">
      <a href="#" onclick="popupVideo('<?php echo the_title(); ?>','<?php echo $video_ex02 ?>')">
          <?php
          if( !empty($thumb_video_ex02) ): ?>
            <img src="<?php echo $thumb_video_ex02['url']; ?>" alt="<?php echo $thumb_video_ex02['alt']; ?>" data-toggle="trailer-principale"/>
            <p>spot breve</p>
          <?php endif; ?>
        </a>
    </div>
  <?php }else {?>
    <div class="column small-12">
      <a href="#" onclick="popupVideo('<?php echo the_title(); ?>','<?php echo $video_ex01 ?>')">
        <?php
        if( !empty($thumb_video_ex01) ): ?>
          <img src="<?php echo $thumb_video_ex01['url']; ?>" alt="<?php echo $thumb_video_ex01['alt']; ?>" data-toggle="trailer-principale"/>
          <p>spot ufficiale</p>
        <?php endif; ?>
        </a>
    </div>
    <div class="column small-12">
      <a href="#" onclick="popupVideo('<?php echo the_title(); ?>','<?php echo $video_ex02 ?>')">
          <?php
          if( !empty($thumb_video_ex02) ): ?>
            <img src="<?php echo $thumb_video_ex02['url']; ?>" alt="<?php echo $thumb_video_ex02['alt']; ?>" data-toggle="trailer-principale"/>
            <p>spot breve</p>
          <?php endif; ?>
        </a>
    </div>
  <?php }?>
</div>

    <div class="testo">
      <?php echo get_the_content(); ?>
    </div>
      <div class="gallery-portfolio">
        <?php $gallery = the_field('gallery'); ?>
          <?php
          $gallery;
          ?>
      </div>
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
  <?php endwhile;?>
</section>

<div id="videoModal" class="reveal large" data-reveal>
  <h2 id="videoModalTitle"></h2>
  <div class="flex-video widescreen">
    <video id="videoModalFrame" type="video/mp4" src="" controls allowfullscreen data-reset-on-close></video>
  </div>

  <button class="close-button" data-close aria-label="Close modal" type="button" onclick="stopVideo()">
     <span aria-hidden="true">&times;</span>
   </button>
</div>
<script type="text/javascript">
function popupVideo(title,src) {

    $("#videoModalTitle").html(title);
    $("#videoModalFrame").attr("src", src);

    //var elem = new Foundation.Reveal("");
    $("#videoModal").foundation("open");
}

function stopVideo() {
  $("#videoModalFrame").eq(0).trigger('pause');
}
</script>

<?php get_footer();
