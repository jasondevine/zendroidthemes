<?php
/*
Template Name: Demo  - homepage
 */
?>


<div id="homepage-wrapper">

<?php
get_header('cover');
?>


<div class="loader">
	<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/dots.gif' ?>" alt="" class="loader-image">
</div>


<?php while (have_posts()): the_post();?>

	<?php the_content();?>

	<?php endwhile;?>


<footer>
    <div class="grid-x grid-padding-x mailchimp-form">
    
    <div class="cell small-10 small-offset-1 large-8 large-offset-1">
        <h1><i class="fa fa-envelope"></i>Keep in touch!</h1>
        <p class="spam-disclaimer">Want to hear when our latest theme is ready to drop? Then please subscribe. We rarely send emails (unless we've got something genuinely interesting or noteworthy to share), and unsubscribing is always easy.</p>
    </div>
    
    
    <div class="cell large-6 medium-offset-1">
        <!-- <div class="mc4wp-response testing"><div class="mc4wp-alert mc4wp-success"><p>Thank you, your sign-up request was successful! Please check your email inbox to confirm.</p></div></div> -->
    </div>
    
    
    <div class="cell small-10 small-offset-1 large-8 large-offset-1">
        <?php echo do_shortcode( '[mc4wp_form id="24"]' ) ?>
    </div>
    
    
    
                        </div>

<?php get_template_part('template-parts/homepage-footer'); ?>
</footer>
<?php wp_footer();?>

</div> <!-- end .homepage-wrapper -->

</body>
</div> <!-- end .off-canvas-content -->
<!-- </div> end .off-canvas-wrapper -->
</html>



