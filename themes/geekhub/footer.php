
<div id="footer">
    <?php if ( is_front_page() ) { ?>

    <ul class="widgets">

        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Widgets')) : else : ?>

        <li>
            <div class="fb-like-box" data-href="http://www.facebook.com/FacebookDevelopers" data-width="276px" data-height="197px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
        </li>
        <li>
            <a class="certificates" href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/certificates.png" alt="Certificates registry"/>Certificates registry</a>
        </li>

        <?php endif; ?>

        <li class="sponsors">
            <h3>
                <?php
                    $obj = get_post_type_object( 'sponsors' );
                    echo $obj->labels->name;
                ?>
            </h3>
            <ul>
                <?php
		            $args = array(
			            'post_type' => 'sponsors',
                        'order'     => 'ASC',
                    );
                    $sponsors = new WP_Query( $args );
                    if( $sponsors->have_posts() ) {
                         while( $sponsors->have_posts() ) {
                            $sponsors->the_post();
                ?>

                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                        } ?>
                        <?php the_title() ?>
                    </a>
                </li>

                <?php
			            }
		            }
		            else {
			            echo 'Oh ohm no sponsors!';
		            }
	            ?>
            </ul>
        </li>
    </ul>
    <?php } ?>

    <?php wp_nav_menu(array(
            'menu' => 'Main Nav Menu',
            'menu_class'      => 'nav',
            'menu_id'         => '',
            'container'       => false
    )); ?>


    <span>&copy; Copyright <?php echo date("Y"); ?></span>
</div>

	</div>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
