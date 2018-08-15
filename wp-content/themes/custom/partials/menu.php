<div class="clear-pads menu-container">

    <?php

    $menu_locations = get_nav_menu_locations();
    $menu = $menu_locations[ 'primary' ];
    $menu = wp_get_nav_menu_items( $menu );

    ?>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand logo" href="<?php echo home_url() ?>" >
                        <img src="<?php bloginfo('template_directory');?>/resources/images/svg/logo.svg">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <?php foreach ( $menu as $item ){?>
                            <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                        <?php } ?>

                        <?php
                        global $q_config, $wp; $image_path = null;
                        $current_url = home_url(add_query_arg(array(),$wp->request));

                        foreach(qtrans_getSortedLanguages() as $language) {
                            $class = '';
                            if( qtranxf_getLanguage() === $language ){
                                $class = 'active';
                            }?>
                                <li><a class="<?php echo $class;?>" href="<?php echo qtrans_convertURL($current_url, $language, false, true)?>"><?php echo strtoupper( $language ); ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</div>