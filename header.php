<?php
/**
 * Header template.
 * 
 * @package Aquila
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class('hello_class'); ?>>

<?php
    if ( function_exists('wp_body_open')) {
        wp_body_open();
    }
?>

<header>Header</header>