<?php get_header(); ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <span>Due to covid-19 Dolphin Gaming Will Be temporarily closed Starting March 16,2020</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="hero-banner">
    <div class="fullscreen-bg">
        <video autoplay muted loop id="hero-video" class="fullscreen-bg__video">
            <source src="<?php echo get_template_directory_uri() . '/assets/img/home-video.mp4' ;?>" type="video/mp4">
        </video>  
    <a href="#" class="btn-animated">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <p>See Today's Jackpot</p>
    </a>
    </div>  
</div>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <article id="explore-gaming" class="container">
        <h2 class="main-title"><?php the_title(); ?></h2>
        <div class="main-desc">
            <?php the_content(); ?>
        </div>
        <button type="button" class="btn btn-primary mx-auto d-block">Make a group Reservation</button>
    </article>

    <article id="bingo" class="container">
        <div class="inner-bingo-content">
            <h2>BINGO AT DOLPHIN</h2>
            <p class="inner-content">
                Bingo is now better than ever! Come in and see how everyone's favourite childhood game 
                has become the go-to place for fun and entertainment. Multiple ways to win and exciting 
                jackpot prizes 7 days of the week. Bingo is a game of pure chance and anyone can play. 
                Did you know that Bingo is a also charitable gaming? Therefore, part of the proceeds 
                go back to local communities!
            </p>
            <div class="btn-group">
                <button type="button" class="btn btn-primary mr-4">Learn More</button>
                <button type="button" class="btn btn-secondary">Jackpots</button>
            </div>
        </div>
    </article>

    <article id="taptix" class="container">
        <div class="inner-taptix-content">
            <h2>Bingo at Dolphin</h2>
            <p class="inner-content text-right">
            Scarborough has game! Our Taptix room is the place to be! Our Taptix machines provide 
            the ultimate entertainment any day of the week from 8 am to 4 am. 
            They are fun and simple to play.
            </p>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Learn More</button>
                <button type="button" class="btn btn-secondary ml-4">Jackpots</button>
            </div>
        </div>
    </article>

    <article id="jackpots-home" class="container">
        <h2>Current Session:</h2>
        <h2>Wed April 15</h2>
        <div class="jackpot-time">
            <img class="time-box-container" src="<?php echo get_template_directory_uri() . '/assets/svg/dolphin-clock-full.svg';?>"/>
            <div class="time-box"><span>1</span><span>0</span><span>0</span><span>0</span><span>AM</span></div>

        </div>
        <div class="taptix-jackpots">
            <h2 class="section-title">Taptix Jackpots</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Game Name</th>
                        <th scope="col" class="text-right">Progressive Jackpot</th>
                    </tr>
                </thead>
                <tbody class="large">
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

    <article id="bingo-callers" class="container max-width-lg">
        <h2 class="section-title">Today's Bingo Callers</h2>
        <div class="bingo-caller-list">
            <div><p>1 PM</p><p>TIFFANY</p></div>
            <div><p>4 PM</p><p>GARRET</p></div>
            <div><p>7 PM</p><p>GARRET</p></div>
            <div><p>10:15 AM</p><p>RED</p></div>
            <div><p>1 AM</p><p>AMY LYNN</p></div>
        </div>
    </article>

    <article class="container">
    <div id="bingo-jackpots" >
            <h2 class="">Bingo Jackpot</h2>
            <div class="bingo-jackpots-subsection max-width-lg">
                <h3 class="section-subtitle">Specials</h3>
                <table class="table">
                    <thead>
                        <tr class="d-flex">
                            <th class="col-3  align-self-end" scope="col">Game Name</th>
                            <th class="col-5 text-center align-self-end" scope="col">Jackpot</th>
                            <th class="col-4 text-right text-md-center" scope="col">Designated Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">Accumulator</th>
                            <td class="col-5 text-center">$2,500</td>
                            <td class="col-4 text-center">52</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">Dolphin</th>
                            <td class="col-5 text-center">$10,000</td>
                            <td class="col-4 text-center">52</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">Super</th>
                            <td class="col-5 text-center">$5,000</td>
                            <td class="col-4 text-center">53</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">Progressive</th>
                            <td class="col-5 text-center">$10,000</td>
                            <td class="col-4 text-center">55</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bingo-jackpots-subsection max-width">
                <h3 class="section-subtitle upik-title">UPIK 8</h3>
                <h4 class="section-subtitle text-center">20 Numbers or Less</h4>
                <table class="table">
                    <thead>
                        <tr class="d-flex">
                            <th class="col-6  align-self-end" scope="col">Date</th>
                            <th class="col-6 text-right"  scope="col">Progressive Jackpot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="d-flex">
                            <th class="col-6" scope="row">Monday Sep 21</th>
                            <td class="col-6">$10,000</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6" scope="row">Tuesday Sep 22</th>
                            <td class="col-6">$10,000</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6" scope="row">Wednesday Sep 23</th>
                            <td class="col-6">$5,000</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6" scope="row">Thusday Sep 24</th>
                            <td class="col-6">$2,500</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6" scope="row">Friday Sep 25</th>
                            <td class="col-6">$2,500</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6" scope="row">Saturday Sep 26</th>
                            <td class="col-6">$2,500</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6" scope="row">Sunday Sep 27</th>
                            <td class="col-6">$2,500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bingo-jackpots-subsection max-width-lg">
                <h3 class="section-subtitle">XTL</h3>
                <table class="table">
                    <thead>
                        <tr class="d-flex">
                            <th class="col-3  align-self-end" scope="col">Ticket</th>
                            <th class="col-5 text-center  align-self-end" scope="col">Jackpot</th>
                            <th class="col-4 text-right text-md-center" scope="col">Designated Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">X</th>
                            <td class="col-5 text-center">$10,000</td>
                            <td class="col-4 text-md-center">13</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">T</th>
                            <td class="col-5 text-center">$10,000</td>
                            <td class="col-4 text-md-center">13</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">L</th>
                            <td class="col-5 text-center">$10,000</td>
                            <td class="col-4 text-md-center">13</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table toonie-pot">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Toonie Pot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">$750</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bingo-jackpots-subsection max-width">
                <h3 class="section-subtitle">E-Bingo</h3>
                <table class="table">
                    <thead>
                        <tr class="d-flex">
                            <th class="col-6  align-self-end"  scope="col">Game Name</th>
                            <th class="col-6 text-right"  scope="col" class="text-right">Progressive Jackpot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="d-flex">
                            <th class="col-6"  scope="row">Turbo</th>
                            <td class="col-6">$3,800</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6"  scope="row">Pod Progressive</th>
                            <td class="col-6">$7,400</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bingo-jackpots-subsection max-width">
                <h3 class="section-subtitle">Rapids</h3>
                <table class="table">
                    <thead>
                        <tr class="d-flex">
                            <th class="col-6 align-self-end" scope="col">Game Name</th>
                            <th class="col-6 text-right" scope="col" class="text-right">designated Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="d-flex">
                            <th class="col-6"  scope="row">Daily Rapids</th>
                            <td class="col-6 text-md-center">5</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6"  scope="row">Sunday's Rapids</th>
                            <td class="col-6 text-md-center">22</td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6"  scope="row">Moneyball</th>
                            <td class="col-6 text-md-center">/</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </article>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>