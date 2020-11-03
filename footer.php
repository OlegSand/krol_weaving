
<footer class="footer">
       <div class="container">
            <!-- contacts -->
        <div class="contacts">
        <p><a href="#"><?php wp_nav_menu(array(
                'theme_location' => 'bottom',
                'container' => null,
                'menu_class' => 'bottom-menu'
            )); ?></a></p>           
        </div>
        <!-- social -->
        <div class="social">
            <a href="https://www.instagram.com/">
                <svg class="social-icon ig-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg/sprite-social.svg#ig"></use>
                </svg>
            </a>
            <a href="https://www.facebook.com/">
                <svg class="social-icon fb-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg/sprite-social.svg#fb"></use>
                </svg>
            </a>
            <a href="https://www.youtube.com/">
                <svg class="social-icon yt-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg/sprite-social.svg#yt"></use>
                </svg>
            </a>
        </div>
        <!-- rights -->
        <div class="copyright"><span>© 2020 Усі права захищенні</span></div>
       </div>
	</footer>
	
	<?php wp_footer(); ?>
	
</body>
</html>
