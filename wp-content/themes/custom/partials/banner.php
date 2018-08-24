<div id="banner" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads white">

	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-md-6 col-sm-6 col-xs-12 right-block">
				<?php if( qtranxf_getLanguage() === "ru" ){ ?>
					<img src="<?php bloginfo('template_directory');?>/resources/images/phone_ru.png">
				<?php }else{ ?>
					<img src="<?php bloginfo('template_directory');?>/resources/images/phone_en.png">
				<?php } ?>

			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 left-block clear-pads">
				<h1 class="title"><?php echo __( 'Nовая эра для туристов', 'taxfree' ) ?></h1>
				<p><?php echo __( '100%  возврат НДС в момент покупки товара с помощью мобильного приложения и картой Tax Free', 'taxfree' ) ?></p>

				<div class="divider"></div>
				<p><span class="green"><?php echo __( 'Технология Blockchain', 'taxfree' ) ?></span>&nbsp;<?php echo __( 'обеспечивает высокий уровень защиты и идентификации', 'taxfree' ) ?></p>

				<a href="" ><button class=""><?php echo __( 'Скачать приложение', 'taxfree' ) ?></button></a>
			</div>

		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php get_template_part('partials/subscribe');?>
		</div>
	</div>




	
</div>