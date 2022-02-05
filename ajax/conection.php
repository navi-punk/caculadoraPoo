<?php

$host = "    ec2-54-157-15-228.compute-1.amazonaws.com";
$user = "lrktyntpbdnlhi";
$password = "Saj236**Egt110";
port = "5432";
$database = "test_developers";


$con = new pg_connect($host, $user, $password, $database);


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
