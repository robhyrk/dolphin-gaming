<?php 
get_header(); 
$submenu = get_field("sub_menu");
$titles = get_field("titles");
$regular = get_field("regular_package");
$double = get_field("double_up_package");
$max = get_field("max_package");
$min = get_field("min_package");
$loaded = get_field("loaded_package");
?>

<div class="packages">

    <article data-aos="fade-up" class="container packages-main">
        <h1 class=""><?php the_title(); ?></h1>
        <p class="inner-content text-center">
            <?php echo strip_tags(get_the_content());?>
        </p>
        <nav>
            <ul class="packages-nav">
                <li><a href="#regular"><?php echo $submenu["regular"];?></a></li>
                <li><a href="#double-up"><?php echo $submenu["double_up"];?></a></li>
                <li><a href="#max"><?php echo $submenu["max"];?></a></li>
                <li><a href="#min"><?php echo $submenu["min"];?></a></li>
                <li><a href="#loaded"><?php echo $submenu["loaded"];?></a></li>
            </ul>
        </nav>
    </article>

    <article data-aos="fade-up" id="regular" class="container">
        <div class="max-width-lg">
            <h3 class="section-title"><?php echo $regular["title"];?></h3>
            <div class="package-sub-section max-width">
                <div class="reg-games">
                    <h4 class="package-title"><?php echo $titles["regular_games_title"];?>:</h4>
                    <p><?php echo $regular["regular_games"];?></p>
                </div>
                <div class="specials">
                    <h4 class="package-title"><?php echo $titles["specials_title"];?>:</h4>
                    <p><?php echo $regular["specials"];?></p>
                </div>
            </div>
            <div class="package-list">
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["everyday"];?></h5>
                        <h5>10 am, 1 pm, 4 pm</h5>
                    </div>
                    <p>$45</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["sun-tues"];?></h5>
                        <h5>7 pm</h5>
                    </div>
                    <p>$55</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["wed-sat"];?></h5>
                        <h5>7 pm</h5>
                    </div>
                    <p>$60</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["sun-thurs"];?></h5>
                        <h5>10:15 pm</h5>
                    </div>
                    <p>$45</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["fri-sat"];?></h5>
                        <h5>10:15 pm</h5>
                    </div>
                    <p>$55</p>
                </div>
            </div>
        </div>
    </article>

    <article data-aos="fade-up" id="double-up" class="container">
        <div class="max-width-lg">
            <h3 class="section-title"><?php echo $double["title"];?></h3>
            <div class="package-sub-section max-width">
                <div class="reg-games">
                    <h4 class="package-title"><?php echo $titles["regular_games_title"];?>:</h4>
                    <p><?php echo $double["regular_games"];?></p>
                </div>
                <div class="specials">
                    <h4 class="package-title"><?php echo $titles["specials_title"];?>:</h4>
                    <p><?php echo $double["specials"];?></p>
                </div>
            </div>
            <div class="package-list">
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["everyday"];?></h5>
                        <h5>10 am, 1 pm, 4 pm</h5>
                    </div>
                    <p>$45</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["sun-tues"];?></h5>
                        <h5>7 pm</h5>
                    </div>
                    <p>$55</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["wed-sat"];?></h5>
                        <h5>7 pm</h5>
                    </div>
                    <p>$60</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["sun-thurs"];?></h5>
                        <h5>10:15 pm</h5>
                    </div>
                    <p>$45</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["fri-sat"];?></h5>
                        <h5>10:15 pm</h5>
                    </div>
                    <p>$55</p>
                </div>
            </div>
        </div>
    </article>

    <article data-aos="fade-up" id="max" class="container">
        <div class="max-width-lg">
            <h3 class="section-title"><?php echo $max["title"];?></h3>
            <div class="package-sub-section max-width">
                <div class="reg-games">
                    <h4 class="package-title"><?php echo $titles["regular_games_title"];?>:</h4>
                    <p><?php echo $max["regular_games"];?></p>
                </div>
                <div class="specials">
                    <h4 class="package-title"><?php echo $titles["specials_title"];?>:</h4>
                    <p><?php echo $max["specials"];?></p>
                </div>
            </div>
            <div class="package-list">
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["everyday"];?></h5>
                        <h5>10 am, 1 pm, 4 pm</h5>
                    </div>
                    <p>$45</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["sun-tues"];?></h5>
                        <h5>7 pm</h5>
                    </div>
                    <p>$55</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["wed-sat"];?></h5>
                        <h5>7 pm</h5>
                    </div>
                    <p>$60</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["sun-thurs"];?></h5>
                        <h5>10:15 pm</h5>
                    </div>
                    <p>$45</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["fri-sat"];?></h5>
                        <h5>10:15 pm</h5>
                    </div>
                    <p>$55</p>
                </div>
            </div>
        </div>
    </article>

    <article data-aos="fade-up" id="min" class="container">
        <div class="max-width-lg">
            <h3 class="section-title"><?php echo $min["title"];?></h3>
            <div class="package-sub-section max-width">
                <div class="reg-games">
                    <h4 class="package-title"><?php echo $titles["regular_games_title"];?>:</h4>
                    <p><?php echo $min["regular_games"];?></p>
                </div>
                <div class="specials">
                    <h4 class="package-title"><?php echo $titles["specials_title"];?>:</h4>
                    <p><?php echo $min["specials"];?></p>
                </div>
            </div>
            <div class="package-list">
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["everyday"];?></h5>
                        <h5>10 am, 1 pm, 4 pm</h5>
                    </div>
                    <p>$45</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["sun-tues"];?></h5>
                        <h5>7 pm</h5>
                    </div>
                    <p>$55</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["wed-sat"];?></h5>
                        <h5>7 pm</h5>
                    </div>
                    <p>$60</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["sun-thurs"];?></h5>
                        <h5>10:15 pm</h5>
                    </div>
                    <p>$45</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["fri-sat"];?></h5>
                        <h5>10:15 pm</h5>
                    </div>
                    <p>$55</p>
                </div>
            </div>
        </div>
    </article>

    <article data-aos="fade-up" id="loaded" class="container">
        <div class="max-width-lg">
            <h3 class="section-title"><?php echo $loaded["title"];?></h3>
            <div class="package-sub-section max-width">
                <div class="reg-games">
                    <h4 class="package-title"><?php echo $titles["regular_games_title"];?>:</h4>
                    <p><?php echo $loaded["regular_games"];?></p>
                </div>
                <div class="specials">
                    <h4 class="package-title"><?php echo $titles["specials_title"];?>:</h4>
                    <p><?php echo $loaded["specials"];?></p>
                </div>
            </div>
            <div class="package-list">
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["everyday"];?></h5>
                        <h5>10 am, 1 pm, 4 pm</h5>
                    </div>
                    <p>$45</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["sun-tues"];?></h5>
                        <h5>7 pm</h5>
                    </div>
                    <p>$55</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["wed-sat"];?></h5>
                        <h5>7 pm</h5>
                    </div>
                    <p>$60</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["sun-thurs"];?></h5>
                        <h5>10:15 pm</h5>
                    </div>
                    <p>$45</p>
                </div>
                <div class="package-details">
                    <div class="package-info">
                        <h5><?php echo $titles["fri-sat"];?></h5>
                        <h5>10:15 pm</h5>
                    </div>
                    <p>$55</p>
                </div>
            </div>
        </div>
    </article>

</div>

    
<?php get_footer();?>