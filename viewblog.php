<?php 
	require_once("config.php");
	require_once("header.php");
    
	
    $thisblogid = $_GET["blogid"];
	$thisblog = fetchThisBlog($thisblogid);
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

<!-- Main -->
<section id="main" class="wrapper">
    <div class="inner">
        <div class="content">

            <!-- Elements -->
            <div class="row">
                <div class="col-6 col-12-medium">
                    <h1 style="color: red;"><?php print $thisblog["title"]; ?></h1>
                    <br></br>
                   <?php print $thisblog["blogcontent"]; ?>
                
                </div>
            </div>
        </div>
    </div>
    sx
</section>
<?php require_once("footer.php");