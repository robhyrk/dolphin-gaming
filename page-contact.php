<?php get_header(); 
$contact = get_field("content");
?>

<div class="contact">

    <article class="container contact-main">
        <h1 class="contact-title"><?php the_title();?></h1>
        <p class="inner-content ">
            <?php echo strip_tags(get_the_content());?>
        <aside class="contact-info">
            <p class="address">
                <?php echo $contact["address"] ;?>
            </p>
            <div class="phone-numbers">
                <div class="phone">
                    <p><?php echo $contact["phone_title"] ;?></p>
                    <p class="number">416 - 759 - 3066</p>
                </div>
                <div class="hotline">
                    <p><?php echo $contact["hotline_title"] ;?></p>
                    <p class="number">416 - 759 - 2526 </p>
                </div>
            </div>
            <div class="email">
                <p><?php echo $contact["email_title"] ;?></p>
                <p class="number"><?php echo $contact["address"] ;?></p>
            </div>
            <div class="social-icons">
                <p><?php echo $contact["message_us_on_social"] ;?></p>
                <a target="_blank" href="https://www.instagram.com/DolphinGaming_/"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="https://www.facebook.com/Dolphingamingcentre"><i class="fab fa-facebook-f"></i></a>                           
            </div>
            <div class="map">
                <a href="https://g.page/DolphinGaming?share" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/dolphin-gaming-map-location.png';?>"/></a> 
            </div>
        </aside>
    </article>

    <article class="container contact-form ">
        <h3 class="secondary-title"><?php echo $contact["book_a_reservation_title"] ;?></h3>
        <p class="inner-content">
            <?php echo $contact["book_a_reservation"] ;?>
        </p>

        <!-- Calendly link widget begin -->
        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
        <a class="btn btn-primary d-block" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/dolphingaming'});return false;"><?php echo $contact["schedule_button"] ;?></a>
        <!-- Calendly link widget end -->
    </article>


</div>

    
<?php get_footer();?>

