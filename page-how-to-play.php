<?php get_header(); ?>

<div class="play">

    <article class="container packages-main max-width">
        <div class="max-width">
            <h1 class=""><?php the_title(); ?></h1>
            <p class="inner-content text-center">
            Hey there, welcome!</br> Here are a few things to help you understand all things Bingo and Tap N' Play. 
            </p>
            <div class="play-nav">
                <a id="bingo">Bingo</a>
                <a id="tapnplay">Tap N' Play</a>
            </div>
        </div>
    </article>

    <div id="bingo-display">
        <article class="container">
        <div class="max-width">
            <div class="inner-section">
                <h4>The object of the game</h4>
                <p>Simple. All you have to do is listen to the ball number being called by the Caller, DAB the appropriate pattern, and be the first to YELL BINGO!</p>
            </div>
            <div class="inner-section">
                <h4>What you need to bring</h4>
                <ol>
                    <li>Cash only. There are ATM machines on site for your convenience</li>
                    <li>You must be 18+ years of age or older to play. Be sure to bring 2 pieces of valid ID with you.</li>
                    <li>Must play with a Dauber (Dabber). Don’t have one? Don’t worry you can buy one at the snack bar.</li>
                </ol>
                <p>
                    <span class="secondary-color">
                        Please arrive at least 30 minutes before the session begins
                    </span> 
                    to buy cards and find your seat. Each session is about 2.5 hours long 
                    and includes an intermission. Not sure when to come? Check out our session times.
                </p>
            </div>
            <div class="inner-section">
                <h4>What you need to bring</h4>
                <p>Head up to one of our cashiers to get started! That's where you can grab your bingo cards, available on paper or electronically (unsure what to choose?). Our awesome cashiers will help you out by getting you started on what you can buy, what the packages are, and what the special games would be (hint: ask about the bigger jackpots!). Don’t forget to grab a program! It lists the games in order, what pattern you are trying to complete and the prizes that you could win!</p>
            </div>
        </div>
        </article>
        <img class="img-fluid mise-mobile" src="<?php echo get_template_directory_uri() . '/assets/img/mise-mobile.jpg';?>"/>
        <img class="img-fluid mise-desktop" src="<?php echo get_template_directory_uri() . '/assets/img/mise-desktop.jpg';?>"/>
        <article class="container" id="winning-patterns">
            <div class="inner-section">
                <h3>Winning Patterns</h3>
                <div class="dropdown select-pattern text-center">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Pattern
                    </button>
                    <div class="dropdown-menu select-pattern" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="any-1-line">Any 1 Line</a>
                        <a class="dropdown-item" href="any-2-line">Any 2 Line</a>
                        <a class="dropdown-item" href="any-3-line">Any 3 Line</a>
                        <a class="dropdown-item" href="patterns-h">Letter H</a>
                        <a class="dropdown-item" href="full-card">Full Card</a>
                        <a class="dropdown-item" href="sputnik">Sputnik</a>
                        <a class="dropdown-item" href="inside-square">Inside Square</a>
                        <a class="dropdown-item" href="outside-square">Outisde Square</a>
                        <a class="dropdown-item" href="4-corners">4 Corner Stamps</a>
                        <a class="dropdown-item" href="top-3-lines">Top 3 Lines</a>
                        <a class="dropdown-item" href="bottom-3-line">Bottom 3 Lines</a>
                        <a class="dropdown-item" href="bottom-2-line">Bottom 2 Lines</a>
                        <a class="dropdown-item" href="any-1-line-hard">Any 1 Line the Hardway*</a>
                        <a class="dropdown-item" href="any-2-line-hard">Any 2 Line the Hardway*</a>
                    </div>
            </div>
            <div class="winning-patterns">
                <div class="patterns-left">
                    <a class="dropdown-item" href="any-1-line">Any 1 Line</a>
                    <a class="dropdown-item" href="1-line-hard">1 Line the Hardway*</a>
                    <a class="dropdown-item" href="any-2-line">Any 2 Line</a>
                    <a class="dropdown-item" href="any-3-line">Any 3 Line</a>
                    <a class="dropdown-item" href="patterns-h">Letter H</a>
                    <a class="dropdown-item" href="full-card">Full Card</a>
                    <a class="dropdown-item" href="sputnik">Sputnik</a>
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
                    <a class="dropdown-item" href="inside-square">Inside Square</a>
                    <a class="dropdown-item" href="2-line-hard">2 Line the Hardway*</a>
                    <a class="dropdown-item" href="outside-square">Outisde Square</a>
                    <a class="dropdown-item" href="4-corners">4 Corner Stamps</a>
                    <a class="dropdown-item" href="top-3-lines">Top 3 Lines</a>
                    <a class="dropdown-item" href="bottom-3-line">Bottom 3 Lines</a>
                    <a class="dropdown-item" href="bottom-2-line">Bottom 2 Lines</a>
                </div>
            </div>

            </div>
            <p class="pattern-info text-center 1-line-hard 2-line-hard">*THESE COMBINATIONS CANNOT INCLUDE THE FREE SPACE</p>
            <div class="inner-section specials">
                <div class="content">
                    <h4>Specials</h4>
                    <p>We are the house of the Dolphin $10,000 jackpot! Dolphin gaming offers four extra specials with huge jackpots. The Accumulator, Dolphin, Super and Progressive are extra jackpot specials that come in separate single strips for individual purchase. Or buy a package and get them included.</p>
                </div>
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/specials.jpg';?>"/>
            </div>
            <div class="inner-section packages">
                <div class="content">
                    <div class="inner-content">
                        <h4>Packages</h4>
                        <p>Here is where you get to play eBingo! We offer packages that bundle both the regular and specials games. More cards to play, more ways to win, more jackpots!</p>
                    </div>
                    <div class="inner-content">
                        <h4>E-Bingo</h4>
                        <p>A modem version of the traditional paper bingo. Purchase a Bingo package and play Bingo on one of our eBingo terminals that you can find on the tables throughout the Bingo hall. The touchscreen automatically plays your cards. All you have to do is follow along and yell “Bingo” when you have matched the desired pattern.</p>
                    </div>
                </div>
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/ebingo.jpg';?>"/>
            </div>
            <div class="inner-section upik8">
                <div class="content">
                    <h4>Upik 8</h4>
                    <p>Play on paper or electrically. Pick your own 8 numbers from your eBingo Terminal using credits purchased at the cashier or have them picked randomly for you.</p> 
                    <p></br>Win in 20 numbers or less and win the jackpot. Each day of the week has its own progressive jackpot.</p>
                </div>
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/upik-8.jpeg';?>"/>
            </div>
        </article>

        <article class="container glossary">
            <div class="inner-section-alt">
                <h3>Glossary</h3>
            </div>
            <div class="inner-section-alt">
                <h4>Caller</h4>
                <p>A Caller is like the MC of a Bingo game. They call out bingo balls so that players can dab the respective numbers on their bingo cards. These numbers will also appear on screens throughout the hall.</p>
            </div>
            <div class="inner-section-alt">
                <h4>Runner</h4>
                <p>These are the employees that are on the floor to sell specials, assist you and verify your BINGO! If you need anything raise your hand and one of our Dolphin Runners will assist you.</p>
            </div>
            <div class="inner-section-alt">
                <h4>Jackpots</h4>
                <p>There are fixed and progressive jackpots each and every day. Our Jackpot specials are played throughout the session and give you a chance to win additional jackpots. They are included when you buy a package.</p>
            </div>
            <div class="inner-section-alt">
                <h4>XTL Ticket</h4>
                <p>There are fixed and progressive jackpots each and every day. Our Jackpot specials are played throughout the session and give you a chance to win additional jackpots. They are included when you buy a package.</p>
                <div class="xtl-ticket-pattern">
                    <img src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-x.svg';?>"/>
                    <img src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-t.svg';?>"/>
                    <img src="<?php echo get_template_directory_uri() . '/assets/patterns/dolphin-gaming-winning-patterns-l.svg';?>"/>
                </div>
            </div>
            <div class="inner-section-alt">
                <h4>Toonie Pot</h4>
                <p>Played during all Regular games. $2 buy - in. Win a full card Bingo after the indicator number and win an additional jackpot. Indicator Number is a ball picked at random before each session begins. The caller will announce the number before the session begins. *included in packages</p>
            </div>
            <div class="inner-section-alt">
                <h4>Designated Numbers</h4>
                <p>There are 75 bingo balls. The designated number refers to the maximum number of balls called in order to win an additional jackpot. If there is no winner in the designated number of balls called or less, there is a consolation prize and the designated number increases either per session or per day depending on the game. For example, if the designated number is 50, you must dab a full card in 50 numbers or less to win the jackpot. If you win in 51 numbers or more, then you win the consolation prize. You can find these numbers on the home page.</p>
            </div>
            <div class="inner-section-alt">
                <h4>Turbo Challenge</h4>
                <p>This game is played during intermission. It is a fast-paced, shutter-style bingo game played on the touchscreens or eBingo terminals. You can play a single card or up to 4 Turbo Challenge Bingo cards at one time. The object of the game is to slide the window on the screen to match the bingo pattern. Once you have the pattern yell Bingo and press the claim button.</p>
            </div>
            <div class="inner-section-alt">
                <h4>Rapids</h4>
                <p>Rapids are also referred to as break open tickets. These tickets are played alongside bingo games for additional jackpot prizes.</p>
            </div>
        </article>
    </div>

    <div id="tapnplay-display">
        <article class="container">
        <div class="max-width">
            <div class="inner-section">
                <h4>The object of the game</h4>
                <p>Simple. All you have to do is listen to the ball number being called by the Caller, DAB the appropriate pattern, and be the first to YELL BINGO!</p>
            </div>
            <div class="inner-section">
                <h4>What you need to know</h4>
                <ol>
                    <li>Cash only. There are ATM machines on site for your convenience</li>
                    <li>You must be 18+ years of age or older to play. Be sure to bring 2 pieces of valid ID with you.</li>
                    <li>All you need to do is load up your machine with cash or a voucher, select your wager amount and TAP away!</li>
                </ol>
                <p>
                    Did you know we also have Progressive Jackpots?
                    Find a machine with an estimated jackpot and join in on the fun.
                </p>
            </div>
        </div>
        </article>
        <img class="img-fluid tap-n-play-spread" src="<?php echo get_template_directory_uri() . '/assets/img/dolphin-tap-n-play-spread.jpg';?>"/>
        <img class="img-fluid tap-n-play-spread-mobile" src="<?php echo get_template_directory_uri() . '/assets/img/dolphin-tap-n-play-spread-mobile.jpg';?>"/>
        <article class="container" id="glossary">
            <div class="inner-section-alt">
                <h3>Glossary</h3>
            </div>
            <div class="inner-section-alt">
                <h4>Single Prize</h4>
                <p>These Tap N' Play games offer only one bet option starting at 50 cents and goes up to 2 dollars.</p>
            </div>
            <div class="inner-section-alt">
                <h4>Runner</h4>
                <p>These Tap N' Play machines offer 3-5 different price points. Therefore, the more you bet the bigger the prize.</p>
            </div>
            <div class="inner-section-alt">
                <h4>Jackpots</h4>
                <p>The Tap N' Play Cashier is where you can cash in your vouchers.</p>
            </div>
            <div class="inner-section-alt">
                <h4>Toonie Pot</h4>
                <p>Once you hit “cash out” on the Tap N' Play machine a voucher will spit out. Bring your voucher to the cashier to claim your prize.</p>
            </div>
            <div class="inner-section-alt">
                <h4>Designated Numbers</h4>
                <p>These Tap N' Play machines have a growing jackpot which you can see at the top of the machine above the screen. To win the big jackpot you must bet the maximum amount.</p>
            </div>
        </article>

    </div>

</div>

    
<?php get_footer();?>