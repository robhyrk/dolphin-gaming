<?php get_header(); ?>

<div class="charity">

    <article data-aos="fade-up" class="container charities-main">
        <h1 class=""><?php the_title(); ?></h1>
        <p class="inner-content text-center">
            <?php echo strip_tags(get_the_content());?>
        </p>

        <?php $images = get_field('charities', 'options'); ?>

        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php 
                $i = 0;
                foreach( $images as $image ): 
                $i++;
                ?>
                <div class="swiper-slide text-center text-md-left single-charity-slider">
                    <div class="logo-container">                        
                        <img class="charity-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <div class="slider-content">
                        <p class="company-title"><?php echo esc_html($image['title']); ?></p>
                        <p><?php echo esc_html($image['caption']); ?></p>
                    </div>
                </div>
                <?php 
                if($i==4){
                    break;
                } 
                endforeach;
                ?>
                <!-- <div class="swiper-slide text-center">Compnay Name 2</div>
                <div class="swiper-slide text-center">Compnay Name 3</div> -->
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </article>
    <hr>
    <article data-aos="fade-up" class="container charities-list">
        <?php foreach( $images as $image ): ?>
            <div class="swiper-slide text-center single-charity">
                <div class="logo-container">                        
                    <img class="charity-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
                    <p class="company-title"><?php echo esc_html($image['title']); ?></p>
            </div>
        <?php endforeach; ?>
    </article>
</div>

    
<?php get_footer();?>