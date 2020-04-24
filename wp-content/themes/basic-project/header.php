<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  wp head not really beautiful  -->
    <?php wp_head(); ?>
    <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <title><?= bp_get_title('-', true); ?></title>
    <link rel="stylesheet" href="<?= bp_get_theme_asset('assets/css/bundle.css');?>">
</head>
<body>
<header class="header">
    <h1><?= bp_get_title('-', false); ?></h1>
<?php wp_nav_menu(['theme_location'=>'main']); ?>
<?php wp_nav_menu(['theme_location'=>'socials']); ?>
</header>
<main>