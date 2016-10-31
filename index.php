<!DOCTYPE html>
<html xmlns:width="http://www.w3.org/1999/xhtml">
<head>
    <?php require_once "includes/header.inc"; ?>
    <title>NewSite - Custom Websites for Small Businesses</title>
    <style>
        #main img {
            opacity: 0;
        }

        #main .section {

            padding-top: 10vh;
        }
    </style>
</head>

<body>
<?php require_once "includes/nav.inc"; ?>
<main>
    <div class="home_start">
        <div class="container">
            <h1>Your business, your site</h1>
            <h5>NewSite creates custom websites for small businesses to help them reach their customers and achieve
                their goals.</h5>
            <br>
            <a href="products.php" class="btn waves-effect waves-light theme-bg">Get Started Today</a>
        </div>
        <div class="copyright">
            Photo by <a href="https://unsplash.com/@dinoreichmuth">Dino Reichmuth</a>
        </div>
    </div>
    <div class="container images-text" id="main">
        <div id="custom" class="section">
            <div class="image">
                <img src="images/design.jpg"/>
                <span class="copyright">Photo by <a
                        href="https://unsplash.com/@joannakosinska">Joanna Kosinka</a></span>
            </div>
            <div class="content">
                <h4 class="heading">Custom Design</h4>
                <p>Here at NewSite, we take the time to custom design every site for every customer. If you <a
                        href="products.php">order a site</a>, we will take the time to sit down with you and figure out
                    how best to design the perfect site for your small business.</p>
            </div>
        </div>
        <div id="personal" class="section">
            <div class="image">
                <img src="images/touching_screen.jpg"/>
                <span class="copyright">Photo by <a
                        href="https://unsplash.com/@timothymuza">timothy muza</a></span>
            </div>
            <div class="content">
                <h4 class="heading">Personal Touch</h4>
                <p>Unlike the big website design companies, we will give your site a personal touch. We aren't a
                    computer program or a template that you have to fill in, we are people with our own <a
                        href="aboutus.php">story</a>, just like you. This story gives us and the sites we create a
                    unique personality, unlike any template you can find.</p>
            </div>
        </div>
        <div id="smallbiz" class="section">
            <div class="image">
                <img src="images/business-open.jpg"/>
                <span class="copyright">Photo by <a
                        href="https://unsplash.com/@mikepetrucci">Mike Petrucci</a></span>
            </div>
            <div class="content">
                <h4 class="heading">We're a Small Business Too!</h4>
                <p>As a small business ourselves, we know what it takes to bring in new customers and keep them coming
                    back.</p>
                <p>We also know how stressfull running a small business can be and are willing to be flexible with our
                    schedule. Please <a href="contact.php">contact us</a> if you have any questions about working with
                    us.</p>
            </div>
        </div>

    </div>
</main>
<?php
require_once "includes/footer.inc";
require_once "includes/scripts.inc";
?>
<script>
    var setOffset = 150;
    Materialize.scrollFire([
        {
            selector: "#custom img", offset: setOffset, callback: function (el) {
            Materialize.fadeInImage($(el));
        }
        },
        {
            selector: "#personal img", offset: setOffset, callback: function (el) {
            Materialize.fadeInImage($(el));
        }
        },
        {
            selector: "#smallbiz img", offset: setOffset, callback: function (el) {
            Materialize.fadeInImage($(el));
        }
        },
    ])
</script>
</body>
</html>