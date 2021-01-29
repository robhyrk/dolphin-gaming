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
        <h2 class="px-4 pt-lg-5"><?php the_title(); ?></h2>
        <div class="pt-4 p-lg-5 mx-lg-5">
            <?php the_content(); ?>
        </div>
    </article>

    <article id="bingo" class="container py-5">
        <div class="row pt-sm-5 mt-lg-5">
            <div class="col-sm-10 py-lg-5 inner-bingo-content">
                <h2>BINGO AT DOLPHIN</h2>
                <p class="py-4">
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
        </div>
    </article>

    <article id="taptix" class="container py-5">
        <div class="row  pt-sm-5  mt-lg-5">
            <div class="col-sm-10 col-lg-8 py-lg-5 offset-sm-2 offset-lg-4">
                <h2>Dolphin’s Taptix Machines</h2>
                <p class="py-4 text-right">
                Scarborough has game! Our Taptix room is the place to be! Our Taptix machines provide 
                the ultimate entertainment any day of the week from 8 am to 4 am. 
                They are fun and simple to play.
                </p>
                <div class="btn-group text-right">
                    <button type="button" class="btn btn-primary">Learn More</button>
                    <button type="button" class="btn btn-secondary ml-4">Jackpots</button>
                </div>
            </div>
        </div>
    </article>

    <article id="jackpots-home" class="container py-5">
        <h2>Current Session:</h2>
        <h2>Wed September 15</h2>
        <div class="jackpot-time">
            <p class="time-box">1</p><p class="time-box">0</p><p class="time-box">0</p><p class="time-box">0</p><p class="time-period">AM</p>
        </div>
        <div class="taptix-jackpots">
            <h2 class="mb-4">Taptix Jackpots</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Game Name</th>
                        <th scope="col" class="text-right">Progressive Jackpot</th>
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

    <article id="bingo-callers" class="container py-5">
        <h2 class="mb-4">Today's Bingo Callers</h2>
        <div class="bingo-caller-list">
            <div><p>1 PM</p><p>TIFFANY</p></div>
            <div><p>4 PM</p><p>GARRET</p></div>
            <div><p>7 PM</p><p>GARRET</p></div>
            <div><p>10:15 AM</p><p>RED</p></div>
            <div><p>1 AM</p><p>AMY LYNN</p></div>
        </div>
    </article>

    <article>
    <div id="bingo-jackpots" class="container py-5">
            <h2 class="mb-4">Bingo Jackpot</h2>
            <div class="bingo-jackpots-subsection pb-5">
                <h3 class="py-4 pb-lg-5">Specials</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Game Name</th>
                            <th scope="col" class="text-right">Jackpot</th>
                            <th scope="col" class="text-right">Designated Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Accumulator</th>
                            <td>$2,500 EST</td>
                            <td>52</td>
                        </tr>
                        <tr>
                            <th scope="row">Dolphin</th>
                            <td>$10,000 EST</td>
                            <td>52</td>
                        </tr>
                        <tr>
                            <th scope="row">Super</th>
                            <td>$5,000 EST</td>
                            <td>53</td>
                        </tr>
                        <tr>
                            <th scope="row">Progressive</th>
                            <td>$10,000 EST</td>
                            <td>55</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bingo-jackpots-subsection pb-5">
                <h3 class="pt-4">UPIK 8</h3>
                <h4 class="pb-4 pb-lg-5 text-center">20 Numbers or Less</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col" class="text-right">Progressive Jackpot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Monday Sep 21</th>
                            <td>$10,000 EST</td>
                        </tr>
                        <tr>
                            <th scope="row">Tuesday Sep 22</th>
                            <td>$10,000 EST</td>
                        </tr>
                        <tr>
                            <th scope="row">Wednesday Sep 23</th>
                            <td>$5,000 EST</td>
                        </tr>
                        <tr>
                            <th scope="row">Thusday Sep 24</th>
                            <td>$2,500 EST</td>
                        </tr>
                        <tr>
                            <th scope="row">Friday Sep 25</th>
                            <td>$2,500 EST</td>
                        </tr>
                        <tr>
                            <th scope="row">Saturday Sep 26</th>
                            <td>$2,500 EST</td>
                        </tr>
                        <tr>
                            <th scope="row">Sunday Sep 27</th>
                            <td>$2,500 EST</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bingo-jackpots-subsection pb-5">
                <h3 class="pb-4 pb-lg-5">XTL</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Ticket</th>
                            <th scope="col" class="text-right">Jackpot</th>
                            <th scope="col" class="text-right">Designated Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">X</th>
                            <td>$10,000 EST</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <th scope="row">T</th>
                            <td>$10,000 EST</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <th scope="row">L</th>
                            <td>$10,000 EST</td>
                            <td>13</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
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
            <div class="bingo-jackpots-subsection pb-5">
                <h3 class="pb-4 pb-lg-5">E-Bingo</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Game Name</th>
                            <th scope="col" class="text-right">Progressive Jackpot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Turbo</th>
                            <td>$3,800</td>
                        </tr>
                        <tr>
                            <th scope="row">Pod Progressive</th>
                            <td>$7,400</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bingo-jackpots-subsection pb-5">
                <h3 class="pb-4 pb-lg-5">Rapids</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Game Name</th>
                            <th scope="col" class="text-right">designated Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Daily Rapids</th>
                            <td>5</td>
                        </tr>
                        <tr>
                            <th scope="row">Sunday's Rapids</th>
                            <td>22</td>
                        </tr>
                        <tr>
                            <th scope="row">Moneyball</th>
                            <td>/</td>
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