<?php

require_once("config.php");

$thisblogID = $_GET['blogid'];
echo "<br><br>";

$deleteblog = deleteThisBlog($thisblogID);



print $thisblogID;
echo "<br><br><bR>";
print $deleteblog;


if($deleteblog)
{
	header('location:viewmyblogs.php');
}
?>