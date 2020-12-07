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
    <article id="explore-gaming" class="container py-5">
        <h2 class="px-4"><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </article>

    <article id="bingo" class="container py-5">
        <h2>BINGO AT DOLPHIN</h2>
        <p>
            Bingo is now better than ever! Come in and see how everyone's favourite childhood game 
            has become the go-to place for fun and entertainment. Multiple ways to win and exciting 
            jackpot prizes 7 days of the week. Bingo is a game of pure chance and anyone can play. 
            Did you know that Bingo is a also charitable gaming? Therefore, part of the proceeds 
            go back to local communities!
        </p>
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Learn More</button>
            <button type="button" class="btn btn-secondary">Jackpots</button>
        </div>
    </article>

    <article id="taptix" class="container py-5">
        <h2>Dolphin’s Taptix Machines</h2>
        <p>
        Scarborough has game! Our Taptix room is the place to be! Our Taptix machines provide 
        the ultimate entertainment any day of the week from 8 am to 4 am. 
        They are fun and simple to play.
        </p>
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Learn More</button>
            <button type="button" class="btn btn-secondary">Jackpots</button>
        </div>
    </article>

    <article id="jackpots-home" class="container py-5">
        <h2>Current Session:</h2>
        <h2>Wed September 15</h2>
        <h2 class="jackpot-time">
            <span class="time-box">1</span><span class="time-box">0</span><span class="time-box">0</span><span class="time-box">0</span>
            <span class="time-period">AM</span>
        </h2>
        <div class="taptix-jackpots">
            <h2>Taptix Jackpots</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Game Name</th>
                        <th scope="col">Progressive Jackpot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">IGT</th>
                    <td>$36,000 EST</td>
                    </tr>
                    <tr>
                    <th scope="row">Bathtime Bucks</th>
                    <td>$5,000 EST</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>