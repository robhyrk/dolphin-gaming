<?php get_header(); 
date_default_timezone_set('America/New_York');
?>

<div class="swiper-container dolphin-tv">
    <div class="swiper-wrapper">

    <?php if( have_posts() ) :
    //The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
        <div class="swiper-slide" data-swiper-autoplay="<?php echo get_field('duration');?>">
            <div class="slide-bg" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')">
            <?php echo file_get_contents(get_theme_file_uri() . '/assets/svg/dolphin-gaming-logo.svg');?>

                <?php if(get_field('shortcode')) :
                        echo do_shortcode(get_field('shortcode'));
                    elseif(get_field('video_link')): ?>
                        <video autoplay muted playsinline loop id="hero-video" class="fullscreen-bg__video">
                            <source src="<?php echo get_field('video_link') ;?>" type="video/mp4">
                        </video> 
                    <?php else :?>
                        <div class="slide-content"><?php the_content() ;?></div>
                    <?php endif; ?>
            </div>
        </div>
    <!-- Loop ends -->
    <?php endwhile;?>
    </div>
</div>
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>