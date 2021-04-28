<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="<?php echo get_home_url();?>">
                <img src="<?php echo get_template_directory_uri() . '/assets/svg/dolphin-gaming-logo.svg';?>"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?php echo get_site_url() . '/how-to-play' ;?>">How to Play</a>
                    <a class="nav-link" href="<?php echo get_site_url() . '/programs' ;?>">Programs</a>
                    <a class="nav-link" href="<?php echo get_site_url() . '/packages' ;?>">Packages</a>
                    <a class="nav-link" href="<?php echo get_site_url() . '/charity' ;?>">Charity</a>
                    <a class="nav-link" href="<?php echo get_site_url() . '/contact' ;?>">Contact</a>
                </div>
                <div class="language-icons">
                    <img src="<?php echo get_template_directory_uri() . '/assets/svg/can-flag.svg';?>"/>
                    <img src="<?php echo get_template_directory_uri() . '/assets/svg/quebec-flag.svg';?>"/>
                </div>
            </div>
        </nav>
    </header>
<main>
