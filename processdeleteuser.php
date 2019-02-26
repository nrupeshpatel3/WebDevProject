
<?php

require_once("config.php");
?>
<div id='left-nav'>
	<?php include("left-nav.php"); ?>
</div>
<?php

$thisuserid = $_POST['userid'];

//Creating a variable to hold the "@return boolean value returned by function updateThisRecord - is boolean 1 with
//successfull and 0 when there is an error with executing the query .
$updatedRecord  = deleteThisRecord($thisuserid);

if($updatedRecord)
{
	header('location:display.php');
}


//display the result that was returned by the updateThisRecord function - in this case we usually get a 1 when the
//update is completed successfully.