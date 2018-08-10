<div id="posts" class="col-xs-12 clear-pads">
    <div class="container">


        <?php
        $args = array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => '5',
            'orderby'        => 'post_date'
        );

        $posts = new WP_Query( $args );

        if ( $posts->have_posts() ) : ?>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads posts-wrap">
                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads post">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 image-wrap clear-pads">
                            <?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
                            <div class="post-img" style="background: url(<?php echo $image; ?>)no-repeat center center;
                                -webkit-background-size: contain;
                                -moz-background-size: contain;
                                -o-background-size: contain;
                                background-size: contain;">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clear-pads post-wrap">
                            <div class="infa">
                                <h1 class="bold title"><?php the_title(); ?></h1>
                                <div class="bold post-content"><?php the_content(); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        <?php endif; ?>

    </div>
</div>