<?php 
    $hostname = "http://localhost/pockebuy";

    require 'vendor/autoload.php'; // include Composer's autoloader
    $dbConnection = new MongoDB\Client("mongodb://localhost:27017");