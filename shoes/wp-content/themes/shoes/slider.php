<div class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <?php 
            $args = array(
                'post_per_page' => 5,
                'post_type' => 'slider'
            );
            ?>
            <?php $getposts = new WP_query($args);
                $i = 1;
            ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php if( $i ==1 ){ ?>
                    <div class="carousel-item active">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'd-block w-100')) ?>
                    </div>
                <?php }else{ ?>
                    <div class="carousel-item">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'd-block w-100')) ?>
                    </div>
                <?php } ?>
                <?php $i++; ?>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
</div>