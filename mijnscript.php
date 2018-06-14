<?php

$datum = "Datum: " . date("Y/m/d");
$blogtitel = $_REQUEST["blogtitel"];
$naam = $_REQUEST["naam"];
$posttxt = $_REQUEST["posttxt"];
file_put_contents("data/datum.txt",$datum . "\r\n\r\n",FILE_APPEND);
file_put_contents("data/blogtitel.txt",$blogtitel . "\r\n\r\n",FILE_APPEND);
file_put_contents("data/naam.txt",$naam . "\r\n\r\n",FILE_APPEND);
file_put_contents("data/posttxt.txt",$posttxt . "\r\n\r\n",FILE_APPEND);

$reverse=array_reverse($datum);
$reverse=array_reverse($blogtitel);
$reverse=array_reverse($naam);
$reverse=array_reverse($posttxt);

header("location:/blog/index1.php");
?>
