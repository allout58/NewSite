<?php
try {
    $db = new PDO("mysql:host=mysql1.cs.clemson.edu;dbname=TMI_4620_a61t", "TMI_4620_mgp3", "databases are fun");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    die("Unable to connect to database server.");
}