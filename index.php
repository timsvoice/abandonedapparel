<?php get_header(); ?>
    
    <div class="row">
            <?php $loop = new WP_Query( array('posts_per_page' => 100) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="small-12 columns apparel-post">                      
                        <div class="image small-12 medium-8 large-8 columns">
                            <img src="<?php the_field('picture');?>" alt="" class="profile-image" />
                        </div>
                        <div class="details small-12 medium-4 large-4 columns">
                            <div class="location">
                                <i class="icon-ios7-location"></i>
                                <p><?php the_field('location') ?></p>
                            </div>
                            <div class="tags">
                                <i class="icon-pricetag"></i>
                                <p><?php the_tags('', ' / '); ?></p>
                            </div>
                            <div class="weather">
                                <i class="<?php the_field('weather') ?>"></i>
                            </div>
                        </div>
                    </div>
            <?php endwhile; ?>
    </div>

    <!-- <div class="horizon">
        <div class="content">
            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="">
            <h1 class="title">Abandoned Apparel</h1>
            <h3 class="tagline">coming soon</h3>
            <div class="tumblr">
                <a href="http://abandoned-apparel.tumblr.com/"><i class="icon-social-tumblr"></i></a>
            </div>
            <div class="twitter">
                <a href="https://twitter.com/abandapparel"><i class="icon-social-twitter"></i></a>
            </div>
        </div>
    </div> --> 
</body>