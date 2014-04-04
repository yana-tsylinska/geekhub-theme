<?php get_header(); ?>

<h3>
    <?php
        $obj = get_post_type_object( 'team' );
        echo $obj->labels->name;
    ?>
</h3>

<ul class="team">
    <?php
		$args = array(
			'post_type' => 'team',
            'order'     => 'ASC',
    );
    $team = new WP_Query( $args );
    if( $team->have_posts() ) {
        while( $team->have_posts() ) {
            $team->the_post();
    ?>

    <li>
        <h4>
            <?php the_title() ?>
            <span><?php get_post_custom(); ?> </span>
        </h4>
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } ?>
        <?php the_content() ?>
    </li>

    <?php
			}
		}
		else {
			echo 'Oh ohm no members!';
		}
	?>
</ul>

<?php get_footer(); ?>