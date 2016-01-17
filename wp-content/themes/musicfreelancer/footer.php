
        </div>

        <?php wp_footer(); ?>


        </div>
        <footer>



            <?php if ( is_active_sidebar( 'copyright_widget' ) ) : ?>
                <div id="copyright_widget" class="copyright" role="complementary">
                    <?php dynamic_sidebar( 'copyright_widget' ); ?>
                </div>
            <?php endif; ?>


            <?php if ( is_active_sidebar( 'social_widget' ) ) : ?>
                <div id="social_widget" class="social" role="complementary">
                    <?php dynamic_sidebar( 'social_widget' ); ?>
                </div>
            <?php endif; ?>



            <?php
/*            wp_nav_menu( array(
                'menu'              => 'Footer Menu',
                'container_class'   => 'container-list-footer'
            ));*/
            ?>

        </footer>


</body>
</html>