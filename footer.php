		<?php if(get_theme_mod('hide_subscribe_box') == '' 
				&& !get_theme_mod('subscribe_moto') == ''
				&& !get_theme_mod('subscribe_button') == ''){ ?>
		<section class="subscribe-news">
            <h2><?php echo get_theme_mod('subscribe_moto'); ?></h2>
            <div class="button">
                <form action="https://softuni.bg">
                    <input type="email" class="email" name="email" placeholder="Your Email" />
                    <button class="subscribe-now"><?php echo get_theme_mod('subscribe_button'); ?></button>
                </form>
            </div>
        </section>
		<?php } ?>
	</main>
	<footer>
        <div class="footer-menu">
			<?php if ( !function_exists('dynamic_sidebar') ||
				!dynamic_sidebar("Left Footer") ) : ?>
			<?php endif;?>
			<?php if ( !function_exists('dynamic_sidebar') ||
				!dynamic_sidebar("Middle Footer") ) : ?>
			<?php endif;?>
			<?php if ( !function_exists('dynamic_sidebar') ||
				!dynamic_sidebar("Right Footer") ) : ?>
			<?php endif;?>
        </div>
        <div class="created-by">
            <p>&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved</p>
            <ul class="social-media">
                <li class="facebook">
                    <a href="http://www.facebook.com" target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x"></i>
                    </span>
                    </a>
                </li>
                <li class="skype">
                    <a href="https://www.skype.com" target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-skype fa-stack-1x"></i>
                    </span>
                    </a>
                </li>
                <li class="twitter">
                    <a href="https://twitter.com/" target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x"></i>
                    </span>
                    </a>
                </li>
                <li class="google">
                    <a href="https://plus.google.com/" target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-google-plus fa-stack-1x"></i>
                    </span>
                    </a>
                </li>
                <li class="printerest">
                    <a href="http://pinterest.com" target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pinterest fa-stack-1x"></i>
                    </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</div>
</body>
</html>