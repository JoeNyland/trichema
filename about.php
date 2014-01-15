<?php
/**
 * Created by PhpStorm.
 * User: joenyland
 * Date: 11/01/2014
 * Time: 20:00
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>About Us | Trichema</title>
    <meta name="description" content="All about Trichema and the services that we provide to our clients">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' type='text/css'>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container">

    <header id="navtop">
        <a href="/" class="logo fleft">
            <img src="assets/img/logo.png" alt="Trichema">
        </a>

        <nav class="fright">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="about.php" class="navactive">About</a></li>
            </ul>
            <ul>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="about-page main grid-wrap">

        <aside class="grid col-one-quarter mq2-col-full">
            <p class="mbottom">Here, you can find out all about Trichema; who we are, what we do and how we can help you.</p>
            <menu>
                <ul>
                    <li><a href="#navphilo" class="arrow">Our philosophy</a></li>
                    <li><a href="#navclients" class="arrow">Our client base</a></li>
                    <li><a href="#navtarget" class="arrow">Our target</a></li>
                </ul>
            </menu>
        </aside>

        <section class="grid col-three-quarters mq2-col-full">
            <img src="assets/img/team.jpg" alt="" >

            <article id="navphilo">
                <h2>Our philosophy</h2>
                <p>Just over 12 years ago our founding partners developed a vision to provide chemical distribution to valued clients in the UK, not only at the lowest prices possible, but to also provide a customer service experience far superior to the competition.</p>
                <p>To this day, Trichema continues to operate around the same principles: Whether your require a large amount of chemicals for a complex project or you need a small amount for a one-off, Trichema will do their utmost to offer the lowest prices possible and cabove all, customer satisfaction.</p>
                <p>With many years of experience and many, many satisfied customers, Trichema are the ultimate chemical distributor in the UK.</p>
            </article>

            <article id="navclients">
                <h2>Our client base</h2>
                <p>Over the years, Trichema has accumulated a diverse client base. We distribute chemicals from <a href="https://www.avantormaterials.com">Avantor</a> directly to clients such as <a href="http://imperial.ac.uk">Imperial College London</a>, <a href="http://www.bachem.com">Bachem</a> and <a href="http://www.veolia.co.uk">Veolia Environment</a>, to name but a few.</p>
                <p>As well as distributing large orders to such clients, we also look after many smaller firms, who may require just one two items per order - no order is too small.</p>
                <p><i>References from current clients are available on request, should you require.</i></p>
            </article>

            <article id="navtarget">
                <h2>Our target</h2>
                <p>Our target is to distribute <a href="https://www.avantormaterials.com">Avantor</a> products to the UK at the lowest prices possible, as quickly as possible and with the customer service that keeps our clients coming back to us for many years.</p>
                <p>Above all, Trichema strives to provide the best possible customer service experience and this is highlighted by the loyalty out clients show us.</p>
                <p>Trichema also strive to provide a flexible service to our clients. Whilst we maintain high stock levels of common chemical products that, sometimes the need arises for an urgent order to be placed. Our excellent sales team will deal with your order at priority number 1 to ensure that you take delivery of the products you require as soon as possible.</p>
                <p>In-stock products, should the need arise, can be delivered to your premises same-day, sometimes within a matter of hours - a level of service no other distributor can match. This not only helps you to complete your projects on time, but also within budget.</p>
                <p>For special-order products direct from <a href="https://www.avantormaterials.com">Avantor</a>, Trichema can deliver to your premises with 24-48 hours.</p>
            </article>

            <article>
                <h2>How can we help?</h2>
                <p>Please see our <a href="contact.php">contact page</a> for information on how to get in touch with our knowledgeable sales team to discuss your requirements and how we can help.</p>
            </article>

        </section>

    </div>

    <div class="divide-top">
        <footer class="grid-wrap">
            <ul class="grid col-one-third social">
                <li>&copy;<?php echo date("Y"); ?> <a href="/" title="Trichema">Trichema</a></li>
                <li>Site powered by <a href="http://www.emerl.co.uk/" target="_blank" title="Site powered by eMerl">eMerl</a></li>
            </ul>

            <div class="up grid col-one-third ">
                <a href="#navtop" title="Go to top of page">&uarr;</a>
            </div>

            <nav class="grid col-one-third ">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </footer>
    </div> <!-- .divide-top -->
</div> <!-- .container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/scripts.js"></script>

<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-46856273-1');ga('send','pageview');
</script>
</body>
</html>
