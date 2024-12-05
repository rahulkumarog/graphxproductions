<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

			
            <div class="clear"></div>
            </div>
            <!--wrapper class end!-->
             
		</div>
		<!--content end!-->
        
        <!--Footer Section-->
        <footer class="footer">
            <div class="footer_top">
                <div class="layout">
                    <ul class="footer_list">
                        <li class="footer_logo"><a href="<?php echo get_option('home'); ?>/">
							<?php if ( of_get_option('website_logo') ) { ?>
                                <img src="<?php echo of_get_option('website_logo'); ?>" alt="<?php bloginfo('name'); ?>" />
                             <?php } else { ?>
                                <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
                            <?php } ?></a>
                         </li>
                        <li>
                            <?php echo of_get_option('footer_address'); ?>
                        </li>
                        <li>
                            <p>For FTP information or to send quotes and orders, please email <br/>
                                <a href="mailto:<?php echo of_get_option('email'); ?>"><?php echo of_get_option('email'); ?></a>
                            </p>
                        </li>
                        <li>
                            <a target="_blank" href="<?php echo of_get_option('facebook_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/fb_icon.png" alt=""/></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="layout">
                    <p> 
                     <?php if ( of_get_option('copyright_text') ) { ?>
                     &copy; <?php echo date('Y').' '.of_get_option('copyright_text') ?>
                    <?php } ?>
                    </p>
                </div>
            </div>
        </footer>
         

	</div>
	<!--layout end!-->
	
</div>
<!--wrapper end!-->
<?php wp_footer(); ?>
</body>
</html>
