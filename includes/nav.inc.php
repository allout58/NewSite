<?php
function isActive($name) {
    return $_SERVER['PHP_SELF'] == $name;
}
?>
<ul id="settings-menu-dropdown" class="dropdown-content">
    <li><a href="#!">Settings 1</a></li>
    <li class="divider"></li>
    <li><a href="/logout.php?redirect=<?php echo basename($_SERVER['REQUEST_URI']);?>">Logout</a></li>
</ul>
<nav>
    <div class="nav-wrapper blue-grey lighten-2">

        <a href="/index.php" class="brand-logo"><i class="large material-icons">movie</i>TMI</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="waves-effect waves-light<?php if(isActive("/index.php")) echo " active";?>"><a href="/index.php">Home</a></li>
            <li class="waves-effect waves-light<?php if(isActive("/movies.php")) echo " active";?>"><a href="/movies.php">Movies</a></li>
            <li class="waves-effect waves-light<?php if(isActive("/actors.php")) echo " active";?>"><a href="/actors.php">Actors</a></li>
            <?php if(!$_SESSION['isLoggedIn']):?>
                <li class="waves-effect waves-light<?php if(isActive("login.php")) echo " active";?>"><a href="/login.php?redirect=<?php echo basename($_SERVER['REQUEST_URI']);?>">Log In</a></li>
            <?php else:
                if($_SESSION['isAdmin']):?>
                    <li class="waves-effect waves-light<?php if(isActive("/admin/index.php")) echo " active";?>"><a href="/admin/index.php">Adiministration</a></li>
                <?php endif;?>
                <li class="waves-effect waves-light"><a href="#!"><?php echo $_SESSION['username'];?></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="settings-menu-dropdown" data-constrainwidth="false"><i class="material-icons">settings arrow_drop_down</i></a></li>
            <?php endif;?>
        </ul>
    </div>
</nav>