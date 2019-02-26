<?php
/**
 * Created by PhpStorm.
 * User: stjuste
 * Date: 4/30/18
 * Time: 6:45 PM
 * Time: 1:44 PM
 */
?>
<?php

require_once("config.php");

global $mysqli, $db_table_prefix;
$blogid = $_GET["blogid"];
$stmt = $mysqli->prepare
(
	"UPDATE " . $db_table_prefix . "bloglisting
                    SET
                    active = '0'
                    WHERE
                    blogid = '".$blogid."'
                    LIMIT 1"
);
$stmt->execute();
$stmt->close();
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
						<td align="center"><a href="publish.php?blogid=<?php print $displayblog["blogid"]; ?>"><?php print $displayblog["active"]; ?></a></td>
						<td><a href="deleteblog.php?blogid=<?php print $displayblog["blogid"]; ?>">Delete</a></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	
	


