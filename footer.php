        <footer>    
            <!-- add widgets here -->
             <div class="fluid-container">
                <section class="row">
                    <div class="col">
                        <a href="<php echo esc_url(home_url()); ?>">
                            <?php dynamic_sidebar('footer-widget-area-one'); ?>
                        </a>
                    </div><!-- .first .widget-area logo that redirects to the homepage-->
                    <div class="col">
                            <?php dynamic_sidebar('footer-widget-area-two'); ?>
                    </div><!-- copyright -->
                    <!-- <div class="col">
                            <?php dynamic_sidebar('footer-widget-area-three'); ?>
                        </div>menu -->
                    <div class="col">
                            <?php dynamic_sidebar('footer-widget-area-four'); ?>
                        </div><!-- .fourth .widget-area -->
                </section>
            </div>
        </footer>
    </body>
</html>