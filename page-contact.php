<?php get_header(); ?>

<div class="contact">

    <article class="container contact-main">
        <h1 class="contact-title">Contact</h1>
        <p class="inner-content ">
        Dolphin gaming is Toronto’s go-to spot for good times. You can tap your way to great prizes on our Taptix machines or Dab your way to our daily jackpots!        </p>
        <aside class="contact-info">
            <p class="address">
                1911 Eglinton Ave East, Unit 4</br>
                Scarborough, Ontario</br>
                M1L 2L6
            </p>
            <div class="phone-numbers">
                <div class="phone">
                    <p>Phone</p>
                    <p class="number">416 - 759 - 3066</p>
                </div>
                <div class="hotline">
                    <p>Hotline</p>
                    <p class="number">416 - 759 - 2526 </p>
                </div>
            </div>
            <div class="email">
                <p>Email</p>
                <p class="number">contact@dolphingaming.ca</p>
            </div>
            <div class="social-icons">
                <p>Message Us On Social</p>
                <a target="_blank" href="https://www.instagram.com/DolphinGaming_/"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="https://www.facebook.com/Dolphingamingcentre"><i class="fab fa-facebook-f"></i></a>                           
            </div>
            <div class="map">
                <a href="https://g.page/DolphinGaming?share" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/dolphin-gaming-map-location.png';?>"/></a> 
            </div>
        </aside>
    </article>

    <article class="container contact-form ">
        <h3 class="secondary-title">Book a Reservation</h3>
        <p class="inner-content">
        We want to give you the ultimate experience. Book a reservation for you and your friends, family or co-workers to get the full Dolphin Gaming experience. 
        </br></br>
        By booking a reservation your group will receive a personal host to guide you through the facility, assist you in buying your cards and finding a seat. Whether you are new to Dolphin or a veteran player but would like to take some friends along, our hosts can make your experience that much better!        </p>

        <!-- Calendly link widget begin -->
        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
        <a class="btn btn-primary d-block" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/dolphingaming'});return false;">Schedule time with us</a>
        <!-- Calendly link widget end -->
    </article>


</div>

    
<?php get_footer();?>

