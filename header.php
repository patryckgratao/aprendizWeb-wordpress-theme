<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php  { wp_title( ' - ', true, 'right');  bloginfo('name'); echo " - "; bloginfo('description');  }  ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/icons.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
</head>

<body>
    <div id="topo">
        <header id="logomarca">
            <div class="content">
                <h1 id="site_title">
                    <a href="#">
                        <img src="http://pixabay.com/static/uploads/photo/2011/08/14/18/11/ubuntu-logo-8647_640.png" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
                    </a>
                </h1>
            </div>

            <nav role="navigation" id="menu_principal">
                <?php wp_nav_menu( $args ); ?>
            </nav>
        </header>
    </div>

