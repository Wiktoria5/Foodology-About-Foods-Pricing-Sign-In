<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fodology
 */

?>

<footer class="footer">
        <div class="container">
            <div class="footer__body">
                <div class="footer__body__right">

                <?php
                $footer_symbols = get_field('footer_symbols');	
                            
                if( $footer_symbols ): ?>

                    <div class="footer__body__right--symbols">
                        <a href="<?php echo $footer_symbols['link_twitter']; ?>"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo $footer_symbols['link_facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo $footer_symbols['link_google']; ?>"><i class="fab fa-google"></i></a>
                        <a href="<?php echo $footer_symbols['link_instagram']; ?>"><i class="fab fa-instagram"></i></a>
                    </div>

                <?php endif; ?> 
                    <div class="footer__body__right--text">
                        <p><?php the_field('footer_rights'); ?></p>
                    </div>
                </div>

                <?php
                $footer_foods = get_field('footer_foods');	
                            
                if( $footer_foods ): ?>

                    <div class="footer__body__center">
                    <p><?php echo $footer_foods['footer_foods_title']; ?></p>
                    <a href="<?php echo $footer_foods['footer_foods_link1_link']; ?>"><?php echo $footer_foods['footer_foods_link1']; ?></a>
                    <a href="<?php echo $footer_foods['footer_foods_link2_link']; ?>"><?php echo $footer_foods['footer_foods_link2']; ?></a>
                    <a href="<?php echo $footer_foods['footer_foods_link3_link']; ?>"><?php echo $footer_foods['footer_foods_link3']; ?></a>
                    </div>

                <?php endif; ?> 

                <?php
                $footer_help = get_field('footer_help');	
                            
                if( $footer_help ): ?>

                <div class="footer__body__left">
                    <p><?php echo $footer_help['footer_help_title']; ?></p>
                    <a href="<?php echo $footer_help['footer_help_link1_link']; ?>"><?php echo $footer_help['footer_help_link1']; ?></a>
                    <a href="<?php echo $footer_help['footer_help_link2_link']; ?>"><?php echo $footer_help['footer_help_link2']; ?></a>
                </div>

                <?php endif; ?> 
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
