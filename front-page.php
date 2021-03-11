<?php get_header(); 
$hide_section = get_field('hide_section', 'option');
?>


<div class="alert alert-danger alert-dismissible fade show <?php echo $hide_section['hide_alert_banner'] ? 'toggle' : null ;?>" role="alert"> 
<span><?php echo get_field('alert_banner', 'option');?></span>
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
            <p><?php echo get_field('bingo_at_dolphin_text', 'option');?></p>
        </div>
        <button type="button" class="btn btn-primary mx-auto d-block">Make a group Reservation</button>
    </article>

    <article id="taptix" class="container">
        <div class="inner-taptix-content">
            <h2>Tap N' Play</h2>
            <p class="inner-content text-right">
                <?php echo get_field('tap_n_play_text', 'option');?>
            </p>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Learn More</button>
                <button type="button" class="btn btn-secondary ml-4">Jackpots</button>
            </div>
        </div>
    </article>

    <article id="bingo" class="container">
        <div class="inner-bingo-content">
            <h2>BINGO AT DOLPHIN</h2>
            <p class="inner-content">
                <?php echo get_field('bingo_at_dolphin_text', 'option');?>
            </p>
            <div class="btn-group">
                <button type="button" class="btn btn-primary mr-4">Learn More</button>
                <button type="button" class="btn btn-secondary">Jackpots</button>
            </div>
        </div>
    </article>

    <article id="jackpots-home" class="container">
    <?php  $current_session = new DateTime(get_field('current_session', 'option'));?>
        <h2>Current Session:</h2>
        <h2><?php echo $current_session->format('l M j'); ?></h2>
        <div class="jackpot-time">
            <img class="time-box-container" src="<?php echo get_template_directory_uri() . '/assets/svg/dolphin-clock-full.svg';?>"/>
            <div class="time-box">
            <span>
                <?php echo substr($current_session->format('h'), 0, -1) ;?>
            </span>
            <span>
                <?php echo substr($current_session->format('h'), -1) ;?>
            </span>
            <span>
                <?php echo substr($current_session->format('i'), 0, -1) ;?>
            </span>
            <span>
                <?php echo substr($current_session->format('i'), -1) ;?>
            </span>
            <span>
                <?php echo $current_session->format('a') ;?>
            </span>
            </div>

        </div>
        <div class="taptix-jackpots <?php echo $hide_section['hide_tap_n_play'] ? 'toggle' : null ;?>">
        <?php $taptix = get_field('taptix_jackpots', 'options');?>
            <h2 class="section-title">Tap N' Play Jackpots</h2>
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
                    <td class="active">$<?php echo $taptix['igt'] ;?></td>
                    </tr>
                    <tr>
                    <th scope="row">Bathtime Bucks</th>
                    <td>$<?php echo $taptix['bathtime_bucks'] ;?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>

    <article id="bingo-callers" class="container max-width-lg <?php echo $hide_section['hide_bingo_callers'] ? 'toggle' : null ;?>">
        <?php $bingo_callers = get_field('bingo_callers', 'options') ;?>
        <h2 class="section-title">Today's Bingo Callers</h2>
        <div class="bingo-caller-list">
            <div><p>1 PM</p><p class="active"><?php echo $bingo_callers['10_am'] ;?></p></div>
            <div><p>4 PM</p><p><?php echo $bingo_callers['4_pm'] ;?></p></div>
            <div><p>7 PM</p><p><?php echo $bingo_callers['7_pm'] ;?>T</p></div>
            <div><p>10:15 AM</p><p><?php echo $bingo_callers['1015_pm'] ;?></p></div>
            <div><p>1 AM</p><p><?php echo $bingo_callers['1_am'] ;?></p></div>
        </div>
    </article>

    <article class="container">
    <div id="bingo-jackpots" class="<?php echo $hide_section['hide_bingo_specials'] ? 'toggle' : null ;?>">
            <h2 class="">Bingo Jackpot</h2>
            <div class="bingo-jackpots-subsection max-width-lg">
                <h3 class="section-subtitle">Specials</h3>
                <?php $bingo_jackpot = get_field('specials', 'options') ;?>
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
                            <td class="col-5 text-center">$<?php echo $bingo_jackpot['accumulator_jackpot'] ;?></td>
                            <td class="col-4 text-center active"><?php echo $bingo_jackpot['accumulator_number'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">Dolphin</th>
                            <td class="col-5 text-center">$<?php echo $bingo_jackpot['dolphin_jackpot'] ;?></td>
                            <td class="col-4 text-center active"><?php echo $bingo_jackpot['dolphin_number'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">Super</th>
                            <td class="col-5 text-center">$<?php echo $bingo_jackpot['super_jackpot'] ;?></td>
                            <td class="col-4 text-center active"><?php echo $bingo_jackpot['super_number'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">Progressive</th>
                            <td class="col-5 text-center">$<?php echo $bingo_jackpot['progressive_jackpot'] ;?></td>
                            <td class="col-4 text-center active"><?php echo $bingo_jackpot['progressive_number'] ;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bingo-jackpots-subsection max-width <?php echo $hide_section['hide_upik_8'] ? 'toggle' : null ;?>">
                <h3 class="section-subtitle upik-title">UPIK 8</h3>
                <?php $upik = get_field('upik_8', 'option');?>
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
                            <th class="col-6" scope="row"><?php echo date("l M j", strtotime('monday this week'));?></th>
                            <td class="col-6">$<?php echo $upik['monday'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6 active" scope="row"><?php echo date("l M j", strtotime('tuesday this week'));?></th>
                            <td class="col-6 active">$<?php echo $upik['tuesday'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6" scope="row"><?php echo date("l M j", strtotime('wednesday this week'));?></th>
                            <td class="col-6">$<?php echo $upik['wednesday'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6" scope="row"><?php echo date("l M j", strtotime('thursday this week'));?></th>
                            <td class="col-6">$<?php echo $upik['thursday'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6" scope="row"><?php echo date("l M j", strtotime('friday this week'));?></th>
                            <td class="col-6">$<?php echo $upik['friday'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6" scope="row"><?php echo date("l M j", strtotime('saturday this week'));?></th>
                            <td class="col-6">$<?php echo $upik['saturday'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6" scope="row"><?php echo date("l M j", strtotime('sunday this week'));?></th>
                            <td class="col-6">$<?php echo $upik['sunday'] ;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bingo-jackpots-subsection max-width-lg <?php echo $hide_section['hide_xtl'] ? 'toggle' : null ;?>">
                <h3 class="section-subtitle">XTL</h3>
                <?php $xtl = get_field('xtl', 'option') ;?>
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
                            <td class="col-4 text-md-center"><?php echo $xtl['x'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">T</th>
                            <td class="col-5 text-center">$10,000</td>
                            <td class="col-4 text-md-center"><?php echo $xtl['t'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">L</th>
                            <td class="col-5 text-center">$10,000</td>
                            <td class="col-4 text-md-center"><?php echo $xtl['l'] ;?></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table toonie-pot <?php echo $hide_section['hide_toonie_pot'] ? 'toggle' : null ;?>">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Toonie Pot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">$<?php echo get_field('toonie_jackpot' , 'options') ;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bingo-jackpots-subsection max-width <?php echo $hide_section['hide_e_bingo'] ? 'toggle' : null ;?>">
                <h3 class="section-subtitle">E-Bingo</h3>
                <?php $ebingo = get_field('e-bingo', 'option');?>
                <table class="table">
                    <thead>
                        <tr class="d-flex">
                            <th class="col-6  align-self-end"  scope="col">Game Name</th>
                            <th class="col-6 text-right"  scope="col" class="text-right">Progressive Jackpot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="d-flex">
                            <th class="col-6" scope="row">Turbo</th>
                            <td class="col-6">$<?php echo $ebingo['turbo'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6"  scope="row">Pod Progressive</th>
                            <td class="col-6">$<?php echo $ebingo['pod_progressive'] ;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bingo-jackpots-subsection max-width <?php echo $hide_section['hide_rapids'] ? 'toggle' : null ;?>">
                <h3 class="section-subtitle">Rapids</h3>
                <?php $rapids = get_field('rapids', 'options') ;?>
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
                            <td class="col-6 text-md-center"><?php echo $rapids['daily'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6"  scope="row">Sunday's Rapids</th>
                            <td class="col-6 text-md-center"><?php echo $rapids['sunday_rapids'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-6"  scope="row">Moneyball</th>
                            <td class="col-6 text-md-center"><?php echo $rapids['moneyball_rapids'] ;?></td>
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