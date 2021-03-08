<?php wp_footer();?>
    </main>
        <div class="age-gate text-center">
            <p>Must be 18 years of age or older. Government-issued photo identification may be required. 
            Must be 19 years of age or older to be served alcohol.
            </p>
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
                        <p>Phone 416 - 759 - 3066</p>
                        <p>Hotline 416 - 759 - 2526</p>
                    </div>
                    <div class="social-icons text-center">
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-facebook-f"></i>                            
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
            </div>
            <div class="logo-area">
                <div class="logos">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/play-smart-logo.png';?>"/>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/olg-logo.png';?>"/>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/rgc-logo.png';?>"/>
                </div>
                <div class="footer-bottom text-center">
                    <p>© 2020 Dolphin Gaming. Website developed in collaboration with Grilled Cheese Affairs.</p>
                </div>
            </div>
        </footer>   
    </body>
</html>