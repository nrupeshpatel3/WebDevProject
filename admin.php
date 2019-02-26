<?php
require_once("config.php");
require_once("header.php");


/* This is the admin file. this file will always  be loaded only upon login
I have included the config.php in here that contains the call to functions.php
 */

require_once("config.php");
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

<!-- this is simple HTML code -- it has calls to the respective files that we are calling at each click -->
<html>
  <head>
    <title>My Application</title>
  </head>
  <body>
    <table>
      <tr><th>Manage Operations:</th></tr>
      <tr><td><a href="display.php">Read Display All Users </a></td></tr>
      <?php if(isUserLoggedIn()) { ?>
      <tr><td><a href="register.php"> CREATE new User</a></td></tr>
      <tr><td><a href="updateThisUser.php"> Update User Record</a></td></tr>
      <tr><td><a href="delete.php"> Delete User Record</a></td></tr>
      <?php } ?>
    </table>
  </body>
</html>
<?php require_once("footer.php"); ?>