<!DOCTYPE html>
<html>
<head>
    <?php require_once "includes/header.inc"; ?>
    <title>Products :: NewSite - Custom Websites for Small Businesses</title>
    <style>
        ul > li {
            padding: 5px;
        }

        #browsers i {
            padding: 5px;
        }
    </style>
</head>

<body>
<?php require_once "includes/nav.inc"; ?>
<main>
    <div class="container">
        <h1>Products and Services</h1>
        <h4>Package Deals</h4>
        <div class="row">
            <div class="col l5 offset-l1 s10 offset-s1">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Full Package</span>
                        <p>This package includes</p>
                        <ul>
                            <li><i class="material-icons left white green-text">check_circle</i><a href="#design">Website
                                    Design</a> - $20/hr @ about 20 hours
                            </li>
                            <li><i class="material-icons left white green-text">check_circle</i><a href="#reg">Domain
                                    Registration</a> - around $2/month
                            </li>
                            <li><i class="material-icons left white green-text">check_circle</i><a href="#hosting">Shared
                                    Hosting</a> - around $1/month
                            </li>
                            <li><i class="material-icons left white green-text">check_circle</i><a href="#maintenance">Server
                                    Maintenance</a> - $18/month <span class="deal">deal</span>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="card-action">
                        <a href="/purchase.php?type=package&package=1">Buy Now</a>
                    </div> -->
                </div>
            </div>
            <div class="col l5 s10 offset-s1">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Small Package</span>
                        <p>This package includes</p>
                        <ul>
                            <li><i class="material-icons left white green-text">check_circle</i><a href="#design">Website
                                    Design</a> - $20/hr @ about 20 hours
                            </li>
                            <li><i class="material-icons left white green-text">check_circle</i><a href="#maintenance">Server
                                    Maintenance</a> - $19/month <span
                                    class="deal">deal</span></li>
                        </ul>
                    </div>
                    <!-- <div class="card-action">
                        <a href="/purchase.php?type=package&package=2">Buy Now</a>
                    </div> -->
                </div>
            </div>
        </div>
        <h4>Individual Options</h4>
        <div class="row">
            <div class="col s10 offset-s1 card" id="design">
                <div class="card-content row">
                    <div class="col s10">
                        <span class="card-title">Website Design</span>
                        <span class="price">$20 per hour (estimated 20 hours per site)</span>
                        <p>We design a website for your company. This includes at least one design session, where we sit
                            down with you to figure out what your site needs, both in features and design. After that,
                            we
                            will begin work on designing and creating your site. Throughout the process, you will get to
                            see our progress and ensure your site is exceeding your expectations.</p>
                        <p>We are excited and thankful to be able to serve you and help you reach your customers more
                            effectively.</p>
                        <p>All websites feature responsive design. The same site you use on your desktop or laptop will
                            still look beautiful on a smartphone or tablet.</p>
                    </div>
                    <div class="col s2 grey-text right-align" id="browsers">
                        <i class="fa fa-edge fa-4x"></i> <i class="fa fa-firefox fa-4x"></i> <i
                            class="fa fa-chrome fa-4x"></i> <i class="fa fa-safari fa-4x"></i>
                    </div>
                </div>
            </div>
            <div class="col s10 offset-s1 card" id="reg">
                <div class="card-content row">
                    <div class="col s10">
                        <span class="card-title">Domain Registration</span>
                        <span class="price">around $2 per month</span>
                        <p>We handle registering and setting up your domain for you. The price for this depends on what
                            domain you would like to purchase, but most sites will be around $1-$2 per month</p>
                    </div>
                    <div class="col s2 right-align">
                        <h3 class="grey-text">.com</h3>
                    </div>
                </div>
            </div>
            <div class="col s10 offset-s1 card" id="hosting">
                <div class="card-content row">
                    <div class="col s10">
                        <span class="card-title">Server Hosting</span>
                        <span class="price">around $1 per month</span>
                        <p>We host your website so you don't have to find and set up a server yourself! We over very
                            cheap
                            hosting for your site, and when you have us host, we can more easily create and update your
                            site.</p>
                    </div>
                    <div class="col s2 grey-text right-align">
                        <i class="fa fa-server fa-5x"></i>
                    </div>
                </div>
            </div>
            <div class="col s10 offset-s1 card" id="maintenance">
                <div class="card-content row">
                    <div class="col s10">
                    <span class="card-title">Maintenance</span>
                    <span class="price">$20 per month</span>
                    <p>We provide the option to update parts of your site's content every month. This allows you to
                        change content, update the theme and images, and add small amounts of content</p>
                    <p>You have 10 change requests per month. If something is not covered by the maintenance plan, we
                        can do </p>
                    </div>
                    <div class="col s2 grey-text right-align">
                        <i class="fa fa-wrench fa-5x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require_once "includes/footer.inc";
require_once "includes/scripts.inc";
?>
</body>
</html>