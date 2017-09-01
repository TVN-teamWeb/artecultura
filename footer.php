
		</section>
</div>
		<div id="footer-container">
			<div class="logo-white">
				<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/logo_white.png">
			</div>
			<div class="footer">

					<div class="colonne-footer">
						<ul class="list-footer">
							<li>TVN Media Group - Arte Cultura</li>
							<li>Corso Magenta 86 20123</li>
							<li>Centralino 02 430 0001</li>
						</ul>
						<ul class="list-footer">
							<li><span>Stefano Sbarbaro</span></li>
							<li>Coordinatore di divisione Arte e Cultura</li>
							<li><a class="mail" href="mailto:stefano.sbarbaro@tvnmediagroup.it">stefano.sbarbaro@tvnmediagroup.it</a></li>
						</ul>
						<ul class="list-footer">
							<li><span>Maria Grazia Drago</span></li>
							<li>Direzione generale - marketing</li>
							<li><a class="mail" href="mailto:mariagrazia.drago@tvnmediagroup.it">mariagrazia.drago@tvnmediagroup.it</a></li>
						</ul>
						<ul class="list-footer">
							<li><span>Sara Moffa</span></li>
							<li>xxxxxx xxxxxxxx xxxxx</li>
							<li><a class="mail" href="mailto:sara.moffa@tvnmediagroup.it">sara.moffa@tvnmediagroup.it</a></li>
						</ul>
					</div>

					<div class="colonne-footer">
						<p>menu</p>
						<?php wp_nav_menu( 'footer' ); ?>
					</div>

					<div class="colonne-footer">
						<p>social</p>
						<ul class="footer-social">
							<li><a class="social" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a class="social" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</div>

			</div>
		</div>
		<footer>
			<div class="footer-info">
				<p>Arte e Cultura è una divisione di TVN Media Group srl, Corso Magenta,85  - 20123 Milano - Tel. 02.4300001</p>
				<p><a href="#" class="rosso">cookie</a> - <a href="#" class="rosso">privacy policy</a></p>
			</div>
		</footer>
		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>
</html>
