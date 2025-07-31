<?php
/**
 * The Header file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap2wordpress
 * @since Bootstrap to WordPress 2.0
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap to Wordpress 2.0</title>
    
    <?php wp_head(); ?>
</head>

<body class="blog">

    <div id="top-nav">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <nav class="main-menu">
                        <ul class="top-menu d-flex flex-row navigation justify-content-end list-unstyled">
                            <li class="menu-item"><a href="index.html">Home</a></li>
                            <li class="menu-item menu-item-has-children"><a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="single.html">Single Post</a></li>
                                    <li class="menu-item"><a href="blog2.html">Blog2</a></li>
                                    <li class="menu-item"><a href="blog3.html">Blog3</a></li>
                                    <li class="menu-item menu-item-has-children"><a href="blog4.html">Blog4</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="blog1-1.html">Blog1.1</a></li>
                                            <li class="menu-item"><a href="blog2-1.html">Blog2.1</a></li>
                                            <li class="menu-item"><a href="blog3-1.html">Blog3.1</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="widgets.html">Widgets</a></li>
                            <li class="menu-item"><a href="contact.html">Contact</a></li>
                            <li class="menu-item special-menu"><a href="join.html" class="text-warning">Join</a></li>
                        </ul>
                    </nav>
                    <button type="button" class="navbar-open">
                        <i class="mobile-nav-toggler flaticon flaticon-menu"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile menu -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn">
                    <i class="flaticon flaticon-close"></i>
                </div>
                <nav class="menu-box">
                    <ul class="navigation clearfix"></ul>
                </nav>
            </div>
        </div>
    </div>