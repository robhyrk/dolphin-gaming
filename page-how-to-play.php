<?php get_header(); 
$bingo = get_field('bingo');
$patterns = get_field('winning_patters');
$glossaryb = get_field('glossary_bingo');
$tapnplay = get_field("tap_n_play");
$glossaryt = get_field("glossary_tap_n_play");
?>

<div class="play">

    <article class="container packages-main max-width">
        <div class="max-width">
            <h1 class=""><?php the_title(); ?></h1>
            <p class="inner-content text-center">
                <?php echo $bingo["top_message"] ;?>
            </p>
            <div class="play-nav">
                <a id="bingo"><?php echo $bingo["bingo_switch_title"] ;?></a>
                <a id="tapnplay"><?php echo $tapnplay["tap_n_play_switcher"] ;?></a>
            </div>
        </div>
    </article>

    <div id="bingo-display">
        <article class="container">
        <div class="max-width">
            <div class="inner-section">
                <h4><?php echo $bingo["object_game"] ;?></h4>
                <p><?php echo $bingo["object_game_content"] ;?></p>
            </div>
            <div class="inner-section">
                <h4><?php echo $bingo["need_to_bring"] ;?></h4>
                <ol>
                    <li><?php echo $bingo["bring_1"] ;?></li>
                    <li><?php echo $bingo["bring_2"] ;?></li>
                    <li><?php echo $bingo["bring_3"] ;?></li>
                </ol>
                <p>
                    <?php echo $bingo["bring_extra"] ;?>
                </p>
            </div>
            <div class="inner-section">
                <h4><?php echo $bingo["get_to_the_cashier"] ;?></h4>
                <p><?php echo $bingo["cashier_content"] ;?></p>
            </div>
        </div>
        </article>
        <img class="img-fluid mise-mobile" src="<?php echo $bingo["place_en_mise_bingo_mobile"] ;?>"/>
        <img class="img-fluid mise-desktop" src="<?php echo $bingo["place_en_mise_bingo"] ;?>"/>
        <article class="container" id="winning-patterns">
            <div class="inner-section">
                <h3><?php echo $patterns["patterns_title"] ;?></h3>
                <div class="dropdown select-pattern text-center">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $patterns["select_pattern"] ;?>
                    </button>
                    <div class="dropdown-menu select-pattern" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="any-1-line"><?php echo $patterns["any_1_line"] ;?></a>
                        <a class="dropdown-item" href="any-2-line"><?php echo $patterns["any_2_line"] ;?></a>
                        <a class="dropdown-item" href="any-3-line"><?php echo $patterns["any_3_line"] ;?></a>
                        <a class="dropdown-item" href="patterns-h"><?php echo $patterns["letter_h"] ;?></a>
                        <a class="dropdown-item" href="full-card"><?php echo $patterns["full_card"] ;?></a>
                        <a class="dropdown-item" href="sputnik"><?php echo $patterns["sputnik"] ;?></a>
                        <a class="dropdown-item" href="inside-square"><?php echo $patterns["inside_square"] ;?></a>
                        <a class="dropdown-item" href="outside-square"><?php echo $patterns["outside_square"] ;?></a>
                        <a class="dropdown-item" href="4-corners"><?php echo $patterns["4_corner_stamps"] ;?></a>
                        <a class="dropdown-item" href="top-3-lines"><?php echo $patterns["top_3_lines"] ;?></a>
                        <a class="dropdown-item" href="bottom-3-line"><?php echo $patterns["bottom_3_lines"] ;?></a>
                        <a class="dropdown-item" href="bottom-2-line"><?php echo $patterns["bottom_2_lines"] ;?></a>
                        <a class="dropdown-item" href="any-1-line-hard"><?php echo $patterns["1_line_the_hardway"] ;?></a>
                        <a class="dropdown-item" href="any-2-line-hard"><?php echo $patterns["2_line_the_hardway"] ;?></a>
                    </div>
            </div>
            <div class="winning-patterns">
                <div class="patterns-left">
                    <a class="dropdown-item" href="any-1-line"><?php echo $patterns["any_1_line"] ;?></a>
                    <a class="dropdown-item" href="1-line-hard"><?php echo $patterns["1_line_the_hardway"] ;?></a>
                    <a class="dropdown-item" href="any-2-line"><?php echo $patterns["any_2_line"] ;?></a>
                    <a class="dropdown-item" href="any-3-line"><?php echo $patterns["any_3_line"] ;?></a>
                    <a class="dropdown-item" href="patterns-h"><?php echo $patterns["letter_h"] ;?></a>
                    <a class="dropdown-item" href="full-card"><?php echo $patterns["full_card"] ;?></a>
                    <a class="dropdown-item" href="sputnik"><?php echo $patterns["sputnik"] ;?></a>
                </div>
                <img id="base" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-base.svg';?>"/>
                <img id="4-corners" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-4-corners.svg';?>"/>
                <img id="patterns-x" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-x.svg';?>"/>
                <img id="patterns-t" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-t.svg';?>"/>
                <img id="patterns-l" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-l.svg';?>"/>
                <img id="any-1-line" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-any-1-line.svg';?>"/>
                <img id="1-line-hard" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-1-line-hard-way.svg';?>"/>
                <img id="2-line-hard" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-any-1-line.svg';?>"/>
                <img id="any-2-line" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-2-lines-hard-way.svg';?>"/>
                <img id="any-3-line" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-any-3-lines.svg';?>"/>
                <img id="bottom-2-line" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-bottom-2-lines.svg';?>"/>
                <img id="bottom-3-line" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-bottom-3-lines.svg';?>"/>
                <img id="full-card" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-full-card.svg';?>"/>
                <img id="patterns-h" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-h.svg';?>"/>
                <img id="inside-square" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-inside-square.svg';?>"/>
                <img id="outside-square" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-outside-square.svg';?>"/>
                <img id="sputnik" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-sputnik.svg';?>"/>
                <img id="top-3-lines" class="bingo-card" src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-top-3-lines.svg';?>"/>
                <div class="patterns-right">
                    <a class="dropdown-item" href="inside-square"><?php echo $patterns["inside_square"] ;?></a>
                    <a class="dropdown-item" href="2-line-hard"><?php echo $patterns["2_line_the_hardway"] ;?></a>
                    <a class="dropdown-item" href="outside-square"><?php echo $patterns["outside_square"] ;?></a>
                    <a class="dropdown-item" href="4-corners"><?php echo $patterns["4_corner_stamps"] ;?></a>
                    <a class="dropdown-item" href="top-3-lines"><?php echo $patterns["top_3_lines"] ;?></a>
                    <a class="dropdown-item" href="bottom-3-line"><?php echo $patterns["bottom_3_lines"] ;?></a>
                    <a class="dropdown-item" href="bottom-2-line"><?php echo $patterns["bottom_2_lines"] ;?></a>
                </div>
            </div>

            </div>
            <p class="pattern-info text-center 1-line-hard 2-line-hard"><?php echo $patterns["disclaimer"] ;?></p>
            <div class="inner-section specials">
                <div class="content">
                    <h4><?php echo $patterns["specials_title"] ;?></h4>
                    <p><?php echo $patterns["specials"] ;?></p>
                </div>
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/specials.jpg';?>"/>
            </div>
            <div class="inner-section packages">
                <div class="content">
                    <div class="inner-content">
                        <h4><?php echo $patterns["packages_title"] ;?></h4>
                        <p><?php echo $patterns["packages"] ;?></p>
                    </div>
                    <div class="inner-content">
                        <h4><?php echo $patterns["e-bingo_title"] ;?></h4>
                        <p><?php echo $patterns["e-bingo"] ;?></p>
                    </div>
                </div>
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/ebingo.jpg';?>"/>
            </div>
            <div class="inner-section upik8">
                <div class="content">
                    <h4><?php echo $patterns["upik_8_title"] ;?></h4>
                    <p><?php echo $patterns["upik_8"] ;?></p>
                </div>
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/upik-8.jpeg';?>"/>
            </div>
        </article>

        <article class="container glossary">
            <div class="inner-section-alt">
                <h3><?php echo $glossaryb["glossary_title"] ;?></h3>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryb["caller_title"] ;?></h4>
                <p><?php echo $glossaryb["caller"] ;?></p>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryb["runner_title"] ;?></h4>
                <p><?php echo $glossaryb["runner"] ;?></p>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryb["jackpots_title"] ;?></h4>
                <p><?php echo $glossaryb["jackpots"] ;?></p>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryb["xtl_title"] ;?></h4>
                <p><?php echo $glossaryb["xtl"] ;?></p>
                <div class="xtl-ticket-pattern">
                    <img src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-x.svg';?>"/>
                    <img src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-t.svg';?>"/>
                    <img src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-l.svg';?>"/>
                </div>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryb["toonie_pot_title"] ;?></h4>
                <p><?php echo $glossaryb["toonie_pot"] ;?></p>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryb["designated_numbers_title"] ;?></h4>
                <p><?php echo $glossaryb["designated_numbers"] ;?></p>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryb["turbo_challenge_title"] ;?></h4>
                <p><?php echo $glossaryb["turbo_challenge"] ;?></p>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryb["rapids_title"] ;?></h4>
                <p><?php echo $glossaryb["rapids"] ;?></p>
            </div>
        </article>
    </div>

    <div id="tapnplay-display">
        <article class="container">
        <div class="max-width">
            <div class="inner-section">
                <h4><?php echo $glossaryb["glossary_title"] ;?></h4>
                <p><?php echo $tapnplay["object_of_the_game"] ;?></p>
            </div>
            <div class="inner-section">
                <h4><?php echo $tapnplay["what_you_need_to_know"] ;?></h4>
                <ol>
                    <li><?php echo $tapnplay["know_1"] ;?></li>
                    <li><?php echo $tapnplay["know_2"] ;?></li>
                    <li><?php echo $tapnplay["know_3"] ;?></li>
                </ol>
                <p>
                    <?php echo $tapnplay["know_extra"] ;?>
                </p>
            </div>
        </div>
        </article>
        <img class="img-fluid tap-n-play-spread" src="<?php echo $tapnplay["place_en_mise"] ;?>"/>
        <img class="img-fluid tap-n-play-spread-mobile" src="<?php echo $tapnplay["place_en_mise_mobile"] ;?>"/>
        <article class="container" id="glossary">
            <div class="inner-section-alt">
                <h3><?php echo $glossaryb["glossary_title"] ;?></h3>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryt["single_prize_title"] ;?></h4>
                <p><?php echo $glossaryt["single_prize"] ;?></p>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryt["runner_title"] ;?></h4>
                <p><?php echo $glossaryt["runner"] ;?></p>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryt["jackpots_title"] ;?></h4>
                <p><?php echo $glossaryt["jackpots"] ;?></p>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryt["toonie_pot_title"] ;?></h4>
                <p><?php echo $glossaryt["toonie_pot"] ;?></p>
            </div>
            <div class="inner-section-alt">
                <h4><?php echo $glossaryt["designated_numbers_title"] ;?></h4>
                <p><?php echo $glossaryt["designated_numbers"] ;?></p>
            </div>
        </article>

    </div>

</div>

    
<?php get_footer();?>