<?php
require_once("config.php");
require_once("header.php");

$myblogs = fetchMyBlogs();
//print_r($myblogs);

?>
<body class="is-preload">

<!-- Header -->
<header id="header">
    <a class="logo" href="index.php">CELL PHONES REVIEWS</a>
    <nav>
        <a href="#menu">Menu</a>
    </nav>
</header>


<?php include("left-nav.php");  //navigation menu bar. ?>

<body>
	<div id="wrapper">
		<div id="content">
			
			<div id="left-nav">
				<?php include("left-nav.php"); ?>
			</div>
			<div id="main">
				<table border="2">
					<tr>
						<th>BlogID</th>
						<th>Title</th>
						<th>View</th>
						<th>Publish</th>
						<th>Delete</th>
					</tr>
					<?php foreach($myblogs as $displayblog) { ?>
						<tr>
							<td><?php print $displayblog["blogid"];?></td>
							<td><?php print $displayblog["title"]; ?></td>
							<td><a href="viewblog.php?blogid=<?php print $displayblog["blogid"]; ?>">View</a></td>
							<td align="center"><a href="publish.php?blogid=<?php print $displayblog["blogid"]; ?>"><?php print $displayblog["active"]; ?></a></td>
							<td><a href="deleteblog.php?blogid=<?php print $displayblog["blogid"]; ?>">Delete</a></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
<?php require_once("footer.php"); ?>