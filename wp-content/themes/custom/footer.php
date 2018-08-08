<div id="footer" class="col-xs-12 clear-pads black-bg white">
	<div class="container clear-pads">


		<div class="">
			<div>
				<img src="">
			</div>
			<div>
				<h4>Технология Blockchain</h4>
				<p>Блокчейн обеспечивает высокий уровень защиты и идентификации</p>
			</div>
		</div>

		<div class="col-md-12 center">
			<a target="_blank" href="<?php echo get_option( 'twitter_input' ); ?>">
				<img src="<?php bloginfo('template_directory');?>/resources/images/svg/twitter.svg">
			</a>

			<a target="_blank" href="<?php echo get_option( 'twitter_input' ); ?>">
				<img src="<?php bloginfo('template_directory');?>/resources/images/svg/twitter.svg">
			</a>

			<a target="_blank" href="<?php echo get_option( 'twitter_input' ); ?>">
				<img src="<?php bloginfo('template_directory');?>/resources/images/svg/twitter.svg">
			</a>
		</div>

		<?php get_template_part('partials/subscribe');?>
	</div>
</div>



<?php wp_footer(); ?>

<?php get_template_part('partials/footer-scripts');?>
</body>
</html>