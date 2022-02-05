<?php

$host = "ec2-54-157-15-228.compute-1.amazonaws.com";
$user = "lrktyntpbdnlhi";
$password = "b79185f9e9b7239bf5bbaee373cbe5e21e1408681a6b79b8959144f8d333f904";
$port = "5432";
$database = "dkl0mam6p80g2";

echo "Archivo de conexion";
//$con = new pg_connect($host, $user, $password, $database,$port);

$dbconn = pg_connect("host=ec2-54-157-15-228.compute-1.amazonaws.com dbname=dkl0mam6p80g2 user=lrktyntpbdnlhi password=b79185f9e9b7239bf5bbaee373cbe5e21e1408681a6b79b8959144f8d333f904")
    or die('Could not connect: ' . pg_last_error());



?>
