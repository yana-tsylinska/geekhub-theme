<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h4><?php the_title(); ?></h4>
            <?php the_content(); ?>
        </div>

    <?php endwhile; ?>
    <?php else : ?>

    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <h3>Not Found</h3>
    </div>

    <?php endif; ?>

<?php get_footer(); ?>