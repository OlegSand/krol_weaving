
<footer class="footer">
       <div class="container">
            <!-- contacts -->
        <div class="contacts">
        <p><a href="#"><?php wp_nav_menu(array(
                'theme_location' => 'bottom',
                'container' => null,
                'menu_class' => 'bottom-menu'
            )); ?></a></p>
            <span><a href="#">Політика конфіденційності</a></span>
        </div>
        <!-- social -->
        <div class="social">
            <svg class="social-icon ig-icon">
                <use xlink:href="img/svg/sprite-social.svg#ig"></use>
            </svg>
            <svg class="social-icon fb-icon">
                <use xlink:href="img/svg/sprite-social.svg#fb"></use>
            </svg>
            <svg class="social-icon yt-icon">
                <use xlink:href="img/svg/sprite-social.svg#yt"></use>
            </svg>
        </div>
        <!-- rights -->
        <div class="copyright"><span>© 2020 Усі права захищенні</span></div>
       </div>
	</footer>
	
	<?php wp_footer(); ?>
	
</body>
</html>
