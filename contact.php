<!DOCTYPE html>
<html>
<head>
    <?php require_once "includes/header.inc.php"; ?>
    <title>NewSite - Custom Websites for Small Businesses</title>
</head>

<body>
<?php require_once "includes/nav.inc.php"; ?>
<div class="container">
    <h1>Contact Us</h1>
    <p>We would love to get in contact with you!</p>
    <p>If you have business questions or comments, please contact us at <a href="mailto:newsite@jameshollowell.com">newsite@jameshollowell.com</a>.
    </p>
    <p>For other inquiries, please use the form below.</p>
    <?php
    if (isset($_POST['email'])) {
        echo "<p>Thank you! Your inquiry has been recieved.</p>";
    }
    ?>
    <form method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="name" name="name" type="text" class="validate" required>
                <label for="name">Name</label>
            </div>
            <div class="input-field col s6">
                <input id="email" name="email" type="email" class="validate" required>
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <textarea id="inquiry" name="inquiry" class="materialize-textarea"></textarea>
                <label for="inquiry">Inquiry</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">send</i>Submit</button>
            </div>
        </div>
    </form>
</div>
<?php require_once "includes/scripts.inc.php"; ?>
</body>
</html>