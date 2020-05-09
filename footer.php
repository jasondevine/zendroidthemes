<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 * As this is for the demo of the theme on zendroidthemes.com, we're adding a floating 'Buy' element so that anyone
 * browsing has the option of a direct link back to themeforest from any page that contains this footer
 *
 * @package zendroidPress
 * @since zendroidPress 1.0.0
 */
?>




<footer class="footer site-footer">
    <div class="footer-container">


    	<div class="footer-grid">
            <?php dynamic_sidebar('footer-sidebar-2');?>
        </div>
        <div class="footer-grid grid-x grid-padding-x align-top">
            <?php dynamic_sidebar('footer-sidebar-1');?> 
        </div>


<?php get_template_part( 'template-parts/stickybuy' ); ?>



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
                <span>Copyright <img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/z.png' ?>" alt="" id="copyright-z"> Zendroid Themes</span>
                <?php echo wp_kses_data(current_time('Y')); ?>
               </div>
            </div>
            <div class="cell large-3">
            <?php if (get_theme_mod('zendroidPress-footer-logo')) {?>
                <a href="<?php echo esc_url(network_home_url()); ?>"><figure class="footer-logo" id="footer-logo">
                        <img src="<?php echo esc_url(get_theme_mod('zendroidPress-footer-logo')); ?>" alt="">
                    </figure></a>
            <?php }?>
            </div>
        </div>
    </div>

</footer>

<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas'): ?>
	</div><!-- Close off-canvas content -->
<?php endif;?>

<?php wp_footer();?>



</body>
</div> <!-- end .off-canvas-content -->
<!-- </div> end .off-canvas-wrapper -->
</html>