<?php
require_once("config.php");
require_once("header.php");
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
	<div id="wrapper">
		<div id="content">
			<h2>My Account</h2>
				<div id="left-nav">
					<?php include("left-nav.php"); ?>
				</div>
			
			<div id="main">
				<br><br><br>
				Hey, <?php print $loggedInUser->first_name . " " . $loggedInUser->last_name; ?>
				Your account has been successfully created.
				Just so you know, you registered this account on <?php print date("M d, Y", $loggedInUser->member_since); ?>.
			</div>
			
			<div id="bottom"></div>
		</div>
	</div>


<?php require_once("footer.php"); ?>