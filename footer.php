<?php wp_footer();?>
    </main>
        <div class="age-gate text-center">
            <p><?php echo get_field('footer_message', 'option');?></p>
        </div>
        <footer class="container-footer">
            <div class="footer-logo-container">
                <img class="footer-logo" src="<?php echo get_template_directory_uri() . '/assets/svg/dolphin-gaming-logo-full.svg';?>"/>
            </div>
            <div class ="footer-menu-container">
                <nav class="footer-menu">
                    <?php
                        wp_nav_menu(array(
                        'theme_location' => 'footer-menu'
                        ));
                    ?>
                </nav>
                <div class="contact-info">
                    <div class="address text-center text-lg-left">
                        <p>1911 Eglinton Ave East, Unit 4</p>
                        <p>Scarborough, Ontario, m1L 2L6</p>
                    </div>
                    <div class="phone-number text-center text-lg-left">
                        <p><?php echo get_field('phone_title', 'option');?></p>
                        <p><?php echo get_field('hotline_title', 'option');?></p>
                    </div>
                    <div class="social-icons text-center">
                        <a target="_blank" href="https://www.instagram.com/DolphinGaming_/"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://www.facebook.com/Dolphingamingcentre"><i class="fab fa-facebook-f"></i></a>                           
                        <a target="_blank" href="https://twitter.com/DolphinGaming_"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="logo-area">
                <div class="logos">
                    <a target="_blank" href="https://www.playsmart.ca/"><img src="<?php echo get_template_directory_uri() . '/assets/img/play-smart-logo.png';?>"/></a>
                    <a target="_blank" href="https://www.olg.ca/en/home.html"><img src="<?php echo get_template_directory_uri() . '/assets/img/olg-logo.png';?>"/></a>
                    <a target="_blank" href="http://www.responsiblegambling.org/"><img src="<?php echo get_template_directory_uri() . '/assets/img/rgc-logo.png';?>"/></a>
                </div>
                <div class="footer-bottom text-center">
                    <p><?php echo get_field('footer_additional', 'option');?></p>
                </div>
            </div>
        </footer>   
    </body>
</html>