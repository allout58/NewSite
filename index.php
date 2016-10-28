<!DOCTYPE html>
<html>
<head>
    <?php require_once "includes/header.inc.php"; ?>
    <title>NewSite - Custom Websites for Small Businesses</title>
    <style>
        .parallax-container {
            height: 700px;
        }
    </style>
</head>

<body>
<?php require_once "includes/nav.inc.php"; ?>
<div class="container">
<!--    <h1>Welcome</h1>-->
<!--    <a href="products.php" class="waves-effect waves-light">Get Started</a>-->
    <div class="parallax-container">
        <div class="parallax">
            <img src="/images/homepage.jpg">
        </div>
    </div>
    <div class="section">
        <div class="row container">
            <h2 class="header">Parallax</h2>
            <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in
                this case, is moved at a different speed than the foreground content while scrolling.</p>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="/images/homepage-2.jpg"></div>
    </div>

</div>
<?php require_once "includes/scripts.inc.php"; ?>
<script>
    $(document).ready(function () {
        $(".parallax").parallax();
    })
</script>
</body>
</html>