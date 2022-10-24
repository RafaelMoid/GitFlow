<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LDPT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>

<body>
    <header class="container">
        <a href="<?php bloginfo('url'); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/marca-site-cpd 1.svg"
                alt="Logo Light Design">
        </a>
        <nav>
            <ul>
                <li>
                    <a href="<?php bloginfo('url'); ?>/">home</a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/sobre">sobre</a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/equipa">equipa</a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/projetos">projetos</a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/blog">blog</a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/videos">videos</a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/contactos">contactos</a>
                </li>
            </ul>
        </nav>
        <div class="links">
            <span class="bt-language">english</span>
            <a href="tel:+351211914676">+351 211 914 676</a>
                <div class="social">
                    <a href="https://instagram.com" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
        </div>
        <div class="brochure-newsletter">
            <a href="">brochure</a>
            <span>|</span>
            <a href="">newsletter</a>
        </div>
        <i id="btOpenMenu" class="fa-solid fa-bars"></i>
    </header>