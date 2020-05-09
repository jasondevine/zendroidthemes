<?php
/**
 * The template for displaying the footer on the homepage, i.e. zendroidthemes.com
 *
 *
 * @package zendroidPress
 * @since zendroidPress 1.0.0
 */
?>



<footer>
        <div class="footer-grid grid-x grid-padding-x align-spaced" id="footer-copyright">

            <div class="cell large-3">
                <a href="#" class="footer-link">Privacy</a>
                <a href="#" class="footer-link">Language</a>
                <a target="blank" href="https://twitter.com/intent/follow?screen_name=<?php echo esc_attr(get_theme_mod('zendroidPress-social-twitter')); ?>"
            title="Follow on Twitter" class="footer-link"><i class="fab fa-twitter"></i></a>
                <a target="blank" href="https://www.facebook.com/<?php echo esc_attr(get_theme_mod('zendroidPress-social-facebook')); ?>" title="Follow on Facebook" class="footer-link"><i class="fab fa-facebook"></i></a>
                <a target="blank" href="https://www.instagram.com/<?php echo esc_attr(get_theme_mod('zendroidPress-social-instagram')); ?>"
            title="Follow on Instagram" class="footer-link"><i class="fab fa-instagram"></i></a>
                <a target="blank" href="https://www.github.com/<?php echo esc_attr(get_theme_mod('zendroidPress-social-github')); ?>" title="Follow on Github" class="footer-link"><i class="fab fa-github"></i></a>
                <a href="mailto:<?php echo esc_attr(get_theme_mod('zendroidPress-social-email')); ?>" class="footer-link"><?php echo esc_attr(get_theme_mod('zendroidPress-social-email')); ?></a>
            </div>
            <div class="cell large-3">
               <div class="copyright-inner">
                <?php echo esc_html('&copy;'); ?>
                <?php echo wp_kses_data(current_time('Y')); ?>
                <span>Copyright <img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/z.png' ?>" alt="" id="copyright-z"> Zendroid Themes</span>
               </div>
            </div>
            <div class="cell large-3">
            <?php if (get_theme_mod('zendroidPress-footer-logo')) {?>
                <a href="<?php echo esc_url(home_url()); ?>"><figure class="footer-logo" id="footer-logo">
                	    <img src="<?php echo esc_url(get_theme_mod('zendroidPress-footer-logo')); ?>" alt="">
                	</figure></a>
            <?php }?>
            </div>
        </div>
</footer>