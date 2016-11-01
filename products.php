<!DOCTYPE html>
<html>
<head>
    <?php require_once "includes/header.inc"; ?>
    <title>NewSite - Custom Websites for Small Businesses</title>
</head>

<body>
<?php require_once "includes/nav.inc"; ?>
<main>
    <div class="container">
        <h1>Products and Services</h1>
        <h4>Package Deals</h4>
        <div class="row">
            <div class="col s5 offset-s1">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Full Package</span>
                        <p>This package includes</p>
                        <ul>
                            <li><a href="#design">Website Design</a> - $20/hr @ about 20 hours</li>
                            <li><a href="#reg">Domain Registration</a> - around $2/month</li>
                            <li><a href="#hosting">Shared Hosting</a> - around $1/month</li>
                            <li><a href="#maintenance">Server Maintenance</a> - $18/month <span class="deal">deal</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-action">
                        <a href="/purchase.php?type=package&package=1">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col s5">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Small Package</span>
                        <p>This package includes</p>
                        <ul>
                            <li><a href="#design">Website Design</a> - $20/hr @ about 20 hours</li>
                            <li><a href="#maintenance">Server Maintenance</a> - $19/month <span
                                    class="deal">deal</span></li>
                        </ul>
                    </div>
                    <div class="card-action">
                        <a href="/purchase.php?type=package&package=2">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <h4>Individual Options</h4>
        <div class="row">
            <div class="col s10 offset-s1 card" id="design">
                <div class="card-content">
                    <span class="card-title">Website Design</span>
                    <p>We design a website for your company.</p>
                </div>
            </div>
            <div class="col s10 offset-s1 card" id="reg">
                <div class="card-content">
                    <span class="card-title">Domain Registration</span>
                    <p>We handle registering your domain for you</p>
                </div>
            </div>
            <div class="col s10 offset-s1 card" id="hosting">
                <div class="card-content">
                    <span class="card-title">Server Hosting</span>
                    <p>We host your website so you don't have to find and set up a server yourself!</p>
                </div>
            </div>
            <div class="col s10 offset-s1 card" id="maintenance">
                <div class="card-content">
                    <span class="card-title">Maintenances</span>
                    <p>We provide the option to update parts of your site's content every month.</p>
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