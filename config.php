<?php
$XVWA_WEBROOT = "";
$host = "tviw6wn55xwxejwj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbname = 'miqkye20qpl1ugt7';
$user = "p5iwgamah3l3kqd6";
$pass = "q8rkcefwmhq4umh9";
$conn = new mysqli($host,$user,$pass,$dbname);
$conn1 = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
