<?php
function isActive($name) {
    return $_SERVER['PHP_SELF'] == $name;
}
?>
<nav>
    <div class="nav-wrapper indigo darken-1">
        <a href="/index.php" class="brand-logo"><!--<img src="/favicon_transparent.ico" class="responsive-img"/>--> NewSite</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="waves-effect waves-light<?php if(isActive("/index.php")) echo " active";?>"><a href="/index.php">Home</a></li>
            <li class="waves-effect waves-light<?php if(isActive("/products.php")) echo " active";?>"><a href="/products.php">Products</a></li>
            <li class="waves-effect waves-light<?php if(isActive("/aboutus.php")) echo " active";?>"><a href="/aboutus.php">About Us</a></li>
            <li class="waves-effect waves-light<?php if(isActive("/faqs.php")) echo " active";?>"><a href="/faq.php">FAQs</a></li>
            <li class="waves-effect waves-light<?php if(isActive("/contact.php")) echo " active";?>"><a href="/contact.php">Contact Us</a></li>
        </ul>
    </div>
</nav>