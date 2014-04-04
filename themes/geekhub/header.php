<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Geekhub</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div id="header-wrap">

		<div id="header">
			<h1>
                <a href="<?php echo get_option('home'); ?>/">
                    <img src="<?php echo get_theme_mod( 'header_logo' ); ?>" alt="<?php bloginfo('name'); ?>"/>
                    <?php bloginfo('name'); ?>
                </a>
            </h1>

            <?php wp_nav_menu(array(
                'menu' => 'Main Menu',
                'menu_class'      => '',
                'menu_id'         => 'nav',
                'container'       => false
            )); ?>

            <ul class="social-links-nav">
                <?php if ( get_theme_mod( 'fb_link' ) ) : ?>
                    <li class="fb">
                        <a href="<?php echo get_theme_mod( 'fb_link' ); ?>">facebook</a>
                    </li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'vk_link' ) ) : ?>
                    <li class="vk">
                        <a href="<?php echo get_theme_mod( 'vk_link' ); ?>">Vkontakte</a>
                    </li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'tw_link' ) ) : ?>
                    <li class="tw">
                        <a href="<?php echo get_theme_mod( 'tw_link' ); ?>">Twitter</a>
                    </li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'yt_link' ) ) : ?>
                    <li class="yt">
                        <a href="<?php echo get_theme_mod( 'yt_link' ); ?>">Youtube</a>
                    </li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'vimeo_link' ) ) : ?>
                    <li class="vimeo">
                        <a href="<?php echo get_theme_mod( 'vimeo_link' ); ?>">Vimeo</a>
                    </li>
                <?php endif; ?>
            </ul>

            <?php if ( is_front_page() ) { ?>
                <h2>Реєстрація на другий сезон відкрита!</h2>
                <a class="reg" href="#">Зареєструватися</a>
            <?php } ?>

		</div>

    </div>

    <div id="wrapper">

