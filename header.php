<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<?php $title = post_type_archive_title( '', false );?>

    <header style="display: <?php echo $title == 'Dolphin TV' ? 'none' : 'block' ;?>">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="<?php echo get_home_url();?>">
                <img src="<?php echo get_template_directory_uri() . '/assets/svg/dolphin-gaming-logo.svg';?>"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?php echo get_site_url() . '/how-to-play' ;?>"><?php echo get_field('how_to_play', 'option');?></a>
                    <a class="nav-link" href="<?php echo get_site_url() . '/programs' ;?>"><?php echo get_field('programs', 'option');?></a>
                    <a class="nav-link" href="<?php echo get_site_url() . '/packages' ;?>"><?php echo get_field('packages', 'option');?></a>
                    <a class="nav-link" href="<?php echo get_site_url() . '/charity' ;?>"><?php echo get_field('charity', 'option');?></a>
                    <a class="nav-link" href="<?php echo get_site_url() . '/contact' ;?>"><?php echo get_field('contact', 'option');?></a>
                </div>
                <?php echo do_action('wpml_add_language_selector');?>
            </div>
        </nav>
    </header>
<main style="max-width: <?php echo $title == 'Dolphin TV' ? '100%' : null ;?>">
