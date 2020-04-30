<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme</title>

    <?php wp_head();?>

</head>

<body>

    <header>

        <div class="container">

        <section class="row">

        <div class="col-lg-3">

<?php if ( function_exists( 'the_custom_logo' ) ) {
 the_custom_logo();
}
?>
</div>

<div class="col-lg-9">
            <?php
wp_nav_menu(
array(
'theme_location' => 'top-menu',
// 'menu' => 'Top Bar',
'menu_class' => 'top-bar',

)
);
?>
</div>
</section>
        </div>

    </header>