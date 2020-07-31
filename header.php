<?php
/**
 * Author: SallaCorp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>">
        </script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
        </script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="icon" href="<?php echo get_site_icon_url(); ?>">
    </head>
    <body>
        <div id="salla_header" class="jumbotron">
            <div class="content-wrap">
                <div class="container">
                    <h1><?php bloginfo('name'); ?></h1>
                    <h3><?php bloginfo('description'); ?></h3>
                </div>
            </div>
        </div>
        <div id="content" class="site-content clearfix">
            <div class="content-wrap">
                <div class="container">