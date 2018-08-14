<div id="footer" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads white">
	<div class="container">

		<div class="footer-container">
			<div class="block-chain">
				
					<img src="<?php bloginfo('template_directory');?>/resources/images/svg/block-chain.svg">
				
				<div class="text">
					<h1 class="title">Технология Blockchain</h1>
					<p>Блокчейн обеспечивает высокий уровень защиты и идентификации</p>
				</div>
			</div>
	
			<div class="col-md-12 center soc-icons">
				<a target="_blank" href="<?php echo get_option( 'twitter_input' ); ?>">
					<img src="<?php bloginfo('template_directory');?>/resources/images/svg/linkedin.svg">
				</a>
	
				<a target="_blank" href="<?php echo get_option( 'twitter_input' ); ?>">
					<img src="<?php bloginfo('template_directory');?>/resources/images/svg/twitter.svg">
				</a>
	
				<a target="_blank" href="<?php echo get_option( 'twitter_input' ); ?>">
					<img src="<?php bloginfo('template_directory');?>/resources/images/svg/instagram.svg">
				</a>
	
				<a target="_blank" href="<?php echo get_option( 'twitter_input' ); ?>">
					<img src="<?php bloginfo('template_directory');?>/resources/images/svg/facebook.svg">
				</a>
	
				<a target="_blank" href="<?php echo get_option( 'twitter_input' ); ?>">
					<img src="<?php bloginfo('template_directory');?>/resources/images/svg/gmail.svg">
				</a>
			</div>
	
			<?php get_template_part('partials/subscribe');?>
		</div>
		<p class="copyright center">© TaxFree Blockchain 2018</p>
	</div>
</div>



<?php wp_footer(); ?>

<?php get_template_part('partials/footer-scripts');?>
</body>
</html>