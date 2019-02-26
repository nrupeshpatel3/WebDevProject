
<!-- Nav -->
<nav id="menu">


<?php
	//Links for logged in user
	if(isUserLoggedIn()) { ?>
		<ul class="links">
			<li><a href='myaccount.php'>Account Home</a></li>
			<li><a href='viewmyblogs.php'>View My Blogs</a> </li>
			<li><a href='createblog.php'>Create A New Blog</a></li>
			<li><a href='logout.php'>Logout</a></li>
		</ul>
	
	<?php }
	//Links for users not logged in
	else { ?>
		<ul class="links">
			<li><a href='index.php'>Home</a></li>
			<li><a href='admin.php'>Administrator</a></li>
            <li><a href='login.php'>Login</a></li>
			<li><a href='register.php'>Register</a></li>
		</ul>
<?php } ?>

</nav>