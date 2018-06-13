<?php
	function postArticle()
	{
			$blogtitel = $_REQUEST["blogtitel"];
			$naam = $_REQUEST["naam"];
		  $posttxt = $_REQUEST["posttxt"];
			file_put_content("/var/www/html/blog/data/post.txt" FILE_APPEND | LOCK_EX);
		}
?>
