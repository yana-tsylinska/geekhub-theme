<?php get_header(); ?>
<p class="geekhub">
    <strong><?php bloginfo('name'); ?></strong> — <?php echo get_theme_mod( 'site_decsription' ); ?>
</p>

<h3>
    <?php
        $obj = get_post_type_object( 'courses' );
        echo $obj->labels->name;
    ?>
</h3>

<ul class="courses">
    <?php
		$args = array(
			'post_type' => 'courses',
            'order'     => 'ASC',
        );
        $courses = new WP_Query( $args );
        if( $courses->have_posts() ) {
            while( $courses->have_posts() ) {
                $courses->the_post();
            ?>

    <li>
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } ?>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
        <?php the_content() ?>
    </li>

    <?php
			}
		}
		else {
			echo 'Oh ohm no courses!';
		}
	?>
</ul>
<?php get_footer(); ?>