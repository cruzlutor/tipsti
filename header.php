<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Documment settings -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Page meta -->
    <title><?php bloginfo('name'); ?></title>

    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico">
    <link rel="alternate" hreflang="es" href="http://www.tipsti.com" />

    <?php wp_head(); ?>

    <!-- Styles'n'Scripts -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400" />

</head>

<body>

    <div id="fb-root"></div>

    <header id="header">
        <div class="wrapper">
            <a href="<?php bloginfo('url'); ?> " class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>
            <nav class="nav"><ul><?php wp_list_categories('title_li'); ?></ul></nav>       
            <div class="share-tipsti">
                <div class="fb-share-button" data-href="https://www.facebook.com/tipsticom" data-layout="button_count"></div>
                <div class="twitter"><a href="https://twitter.com/tipsticom" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @tipsticom</a></div>
            </div>
        </div>
    </header>
