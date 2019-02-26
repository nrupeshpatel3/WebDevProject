<?php

require_once("config.php");
//print_r($_POST);

//Forms posted

if(!empty($_POST)) {
	
	$errors = array();
	$title = trim($_POST["title"]);
	$blog = trim($_POST["blog"]);
	
	if($title == "") {
		$errors[] = "enter a title";
	}
	
	if($blog == "") {
		$errors[] = "enter blog contents";
	}
	
	//End data validation
	if(count($errors) == 0) {
		
		$createBlog = createBlog($title, $blog);
		print_r($createBlog);
		if($createBlog <> 1) {
			$errors[] = "OOOPPSS!! your blog could not be created";
		}
	}
	if(count($errors) == 0) {
		$successes[] = "blog is now available";
	}
}

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

<body>
<div id="wrapper">
	<div id="content">
		<h2>Create New Blog</h2>
		<div id="left-nav">
			<?php include("left-nav.php"); ?>
		</div>
		<div id="main">
			<pre>
				
              <?php
                print_r($errors);
				print_r($successes);
				?>
			</pre>
			
			<div id="regbox">
				<form name="newUser" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
					
					<p>
						<label>Title:</label>
						<input type="text" name="title" />
					</p>
					
					<!---<p>
						<label>Blog Content:</label>
						<textarea name="blog" rows="25" cols="40"></textarea>
					</p>--->
                    
                    <p>
                        <script>tinymce.init({ selector:'textarea', plugins: 'link' });</script>
                        <textarea name="blog"></textarea>
                    </p>
					
					<p>
						<label>&nbsp;</label>
						<input type="submit" value="createBlog"/>
					</p>
				
				</form>
			</div>
		</div>
		<div id='bottom'></div>
	</div>
</body>
</html>
<?php require_once("footer.php"); ?>