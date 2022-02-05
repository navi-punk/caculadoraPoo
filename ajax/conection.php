<?php

$host = "ec2-54-157-15-228.compute-1.amazonaws.com";
$user = "lrktyntpbdnlhi";
$password = "b79185f9e9b7239bf5bbaee373cbe5e21e1408681a6b79b8959144f8d333f904";
$port = "5432";
$database = "dkl0mam6p80g2";


$con = new pg_connect($host, $user, $password, $database);


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
