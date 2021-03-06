<?php wp_footer();?>
        </main>
            <div class="age-gate">
                <div class="row">
                    <div class="col col-lg-6 offset-lg-3 text-center">
                        <p>Must be 18 years of age or older. Government-issued photo identification may be required. 
                        Must be 19 years of age or older to be served alcohol.
                        </p>
                    </div>
                </div>
            </div>
            <footer class="container-footer">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="<?php echo get_template_directory_uri() . '/assets/svg/dolphin-gaming-logo-full.svg';?>"/>
                    </div>
                    <nav class="col-sm-6 offset-sm-3">
                        <?php
                            wp_nav_menu(array(
                            'theme_location' => 'footer-menu'
                            ));
                        ?>
                    </nav>
                    <div class="col-12 text-center contact-info">
                        <div class="row">
                            <div class="col-12 col-sm-4 address">
                                <p>1911 Eglinton Ave East, Unit 4</p>
                                <p>Scarborough, Ontario, m1L 2L6</p>
                            </div>
                            <div class="col-12 col-sm-4 phone-number">
                                <p>Phone 416 - 759 - 3066</p>
                                <p>Hotline 416 - 759 - 2526</p>
                            </div>
                            <div class="col-12 col-sm-4 social-icons d-flex align-items-center justify-content-center">
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-facebook-f"></i>                            
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 d-flex justify-content-between logos">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/play-smart-logo.png';?>"/>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/olg-logo.png';?>"/>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/rgc-logo.png';?>"/>
                        </div>
                        <div class="col-12 col-sm-6 text-center footer-bottom">
                            <p>© 2020 Dolphin Gaming. Website developed in collaboration with Grilled Cheese Affairs.</p>
                        </div>
                    </div>
                </div>
            </footer>   
    </body>
</html>