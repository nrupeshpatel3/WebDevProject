<?php
require_once("config.php");
require_once("header.php");

//Prevent the user visiting the logged in page if he/she is already logged in
if(isUserLoggedIn()) {
	header("Location: myaccount.php");
	die();
}

// call to fetchallblogs function from functions.php
$allblogs = fetchAllBlogs();
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


<!-- Banner -->
<section id="banner">
    <div class="inner">
        <h1>Iphone Reviews</h1>
        <p>This website is dedicated to iPhone x reviews!</p>
    </div>
    <video autoplay loop muted playsinline src="style/images/banner.mp4"></video>
</section>

		
		->

    <!-- Highlights -->
<section class="wrapper">
    <div class="inner">
        <header class="special">
            <h2>Sem turpis amet semper</h2>
            <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
        </header>
        <div class="highlights">
        
				<?php
				foreach($allblogs as $bloginfo) {
					$summary = truncate_chars($bloginfo['blogcontent'], 150, '...');
					//$summary  = $bloginfo['blogcontent'];
					$publisheddate = date("M d, Y", $bloginfo['datecreated']);
					?>

                    <section>
                        <div class="content">

                        <header>
                <a href="#" class="icon fa-vcard-o"><span class="label">Icon</span></a>
                <h3<a href="viewblog.php?blogid=<?php print $bloginfo['blogid']; ?>"><?php print $bloginfo['title']; ?></a></h3>
            </header>

            
       
						<p><?php print $summary; ?></p>
					
							<ul>
								<li>BY : <?php print $bloginfo['firstname'] . " " . $bloginfo['lastname']; ?></li>
								<li class="date"><?php print $publisheddate; ?></li>
								<li class="read-more"><a href="viewblog.php?blogid=<?php print $bloginfo['blogid']; ?>">Read more</a>
								</li>
							</ul>
                </div>
            </section>
						
				<?php } ?>
    
    
    </div>
</section>

<?php require_once("footer.php"); ?>