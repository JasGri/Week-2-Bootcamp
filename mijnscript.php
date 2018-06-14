<?php
$blogtitel = $_REQUEST["blogtitel"];
$naam = $_REQUEST["naam"];
$posttxt = $_REQUEST["posttxt"];
file_put_contents("data/blog.txt",$blogtitel . "\r\n",FILE_APPEND);
file_put_contents("data/blog.txt",$naam . "\r\n",FILE_APPEND);
file_put_contents("data/blog.txt",$posttxt . "\r\n",FILE_APPEND);
$message =  "Je blog is geplaatst!";
echo "<script type='text/javascript'>alert('$message');</script>";
