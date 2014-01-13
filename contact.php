<?php
/**
 * Created by PhpStorm.
 * User: joenyland
 * Date: 11/01/2014
 * Time: 21:44
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Contact Us | Trichema</title>
    <meta name="description" content="Get in touch with Trichema to discuss how we can help you">
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
                <li><a href="about.php">About</a></li>
            </ul>
            <ul>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php" class="navactive">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="contact-page main grid-wrap">

        <aside class="grid col-one-quarter mq2-col-one-third mq3-col-full">

            <p class="mbottom">Get in touch with Trichema to discuss how we can help you.</p>

            <address class="mbottom">
                <h5>Trichema</h5>
                31 Victoria Road<br>
                Grappenhall<br>
                Warrington<br>
                <a href="http://maps.google.com/maps?saddr=31+Victoria+Road,+Grappenhall,+Warrington,+United+Kingdom" target="_blank">Get directions</a>
            </address>

            <p class="mbottom">
                Tel: <a href="tel://+441925266036">(+44) 1925 266036</a><br>
                Fax: <a href="tel://+441925600134">(+44) 1925 600134</a>
            </p>
            <p class="mbottom">
                <a href="mailto:sales@trichema.co.uk">sales@trichema.co.uk</a><br>
            </p>
            <p>
            <h6>Opening hours: </h6>
            Monday - Friday<br>
            09:00am - 5:00pm
            </p>

        </aside>

        <section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">
            <h2>Get in touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit.</p>

            <h3>Send us a message:</h3>

            <form id="contact_form" class="contact_form" action="contact.php" method="post" name="contact_form">
                <ul>
                    <li>
                        <label for="name">Your name:</label>
                        <input type="text" name="name" id="name" placeholder="Please enter your name here..." required class="required" >
                    </li>
                    <li>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required placeholder="Please enter your email address here..." class="required email">
                    </li>
                    <li>
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" cols="100" rows="6" required  class="required" placeholder="Please enter your message here...."></textarea>
                    </li>
                    <li>
                        <button type="submit" id="submit" name="submit" class="button fright">Send Message</button>
                    </li>
                </ul>
            </form>
        </section>

    </div> <!--main-->
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