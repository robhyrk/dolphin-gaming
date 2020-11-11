<?php get_header(); ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <span>Due to covid-19 Dolphin Gaming Will Be temporarily closed Starting March 16,2020</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="hero-banner">
<a href="#" class="btn-animated">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <p>See Today's Jackpot</p>
</a>
</div>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <article class="container py-5">
        <h2 class="px-4"><?php the_title(); ?></h2>
        <p class=""><?php the_content(); ?></p>
    </article>

    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>