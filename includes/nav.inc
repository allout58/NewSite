<?php
function isActive($name)
{
    return $_SERVER['PHP_SELF'] == $name;
}

?>
<header>
    <nav>
        <div class="nav-wrapper theme-bg">
            <a href="/index.php" class="brand-logo"><!--<img src="/favicon_transparent.ico" class="responsive-img"/>-->
                NewSite</a>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-main" class="right hide-on-med-and-down">
                <li class="waves-effect waves-light<?php if (isActive("/index.php")) echo " active"; ?>"><a
                        href="/index.php">Home</a></li>
                <li class="waves-effect waves-light<?php if (isActive("/products.php")) echo " active"; ?>"><a
                        href="/products.php">Products</a></li>
                <li class="waves-effect waves-light<?php if (isActive("/aboutus.php")) echo " active"; ?>"><a
                        href="/aboutus.php">About Us</a></li>
                <li class="waves-effect waves-light<?php if (isActive("/faqs.php")) echo " active"; ?>"><a
                        href="/faq.php">FAQs</a></li>
                <li class="waves-effect waves-light<?php if (isActive("/contact.php")) echo " active"; ?>"><a
                        href="/contact.php">Contact Us</a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav">
                <li><a href="/index.php">Home</a></li>
                <li><a href="/products.php">Products</a></li>
                <li><a href="/aboutus.php">About Us</a></li>
                <li><a href="/faq.php">FAQs</a></li>
                <li><a href="/contact.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>
</header>