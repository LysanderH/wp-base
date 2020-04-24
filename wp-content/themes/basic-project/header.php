<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  wp head not really beautiful  -->
    <?php wp_head(); ?>
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?= bp_get_theme_asset('assets/css/bundle.css');?>">
</head>
<body>
<header class="header">
    <h1><?php the_title(); ?></h1>

</header>
<main>