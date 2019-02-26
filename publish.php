<?php
/**
 * Created by PhpStorm.
 * User: Karan
 * Date: 11/27/2017
 * Time: 12:35 PM
 */
?>
<?php

require_once("config.php");

global $mysqli, $db_table_prefix;
$blogid = $_GET["blogid"];
echo $blogid;
$stmt = $mysqli->prepare("select active from bloglisting where blogid = '$blogid'");
$result = $stmt->execute();
echo $result;
$stmt->close();
if($result['active'] == 0)
{
	$stmt = $mysqli->prepare
	(
		"UPDATE " . $db_table_prefix . "bloglisting
                    SET
                    active = '1'
                    WHERE
                    blogid = '".$blogid."'
                    LIMIT 1"
	);
	$stmt->execute();
	$stmt->close();
}
else if($result == 1)
{
	$stmt = $mysqli->prepare
	(
		"UPDATE " . $db_table_prefix . "bloglisting
                    SET
                    active = '1'
                    WHERE
                    blogid = '".$blogid."'
                    LIMIT 1"
	);
	$stmt->execute();
	$stmt->close();
}
$myblogs = fetchMyBlogs();
require_once("header.php");
?>

    <div id="content-wrap">
    <div id="content">
        <div id="main">
            <table>
                <tr>
                    <th>BlogID</th>
                    <th>Title</th>
                    <th>View</th>
                    <th>Publish</th>
                    <th>Delete</th>
                </tr>
							<?php foreach($myblogs as $displayblog) { ?>
                  <tr>
                      <td><?php print $displayblog["blogid"]; ?></td>
                      <td><?php print $displayblog["title"]; ?></td>
                      <td><a href="viewblog.php?blogid=<?php print $displayblog["blogid"]; ?>">View</a></td>
                      <td align="center"><a href="unpublish.php?blogid=<?php print $displayblog["blogid"]; ?>"><?php print $displayblog["active"]; ?></a></td>
                      <td><a href="deleteblog.php?blogid=<?php print $displayblog["blogid"]; ?>">Delete</a></td>
                  </tr>
							<?php } ?>
            </table>
        </div>
    </div>
    