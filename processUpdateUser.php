<?php

require_once("config.php");

?>
<div id="left-nav">
	<?php include("left-nav.php"); ?>
</div>
<?php


$FirstName = $_POST['firstname'];
$LastName = $_POST['lastname'];
$Email = $_POST['email'];
$ThisUserID= $_POST['userid'];
$Password = $_POST[ 'password'];


$updatedRecord  = updateThisRecord($FirstName, $LastName, $Email, $ThisUserID, $Password);

if($updatedRecord)
{
	header('location:display.php');
}

echo $updatedRecord;
?>