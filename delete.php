<?php


include_once("config.php");

$allusers = fetchAllUsers();

?>

<div id='left-nav'>
    <?php include("left-nav.php"); ?>
</div>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>Update User</title>
    <!-- Style -- Can also be included as a file usually style.css -->
    <style type="text/css">
        table.table-style-three {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-color: #3A3A3A;
            border-collapse: collapse;
        }
        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #D56A6A;
            color: #ffffff;
        }
        table.table-style-three a {
            color: blue;
            text-decoration: none;
        }

        table.table-style-three tr:hover td {
            cursor: pointer;
        }
        table.table-style-three tr:nth-child(even) td{
            background-color: #F7CFCF;
        }
        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #ffffff;
        }
    </style>
</head>

<body>
<table class="table-style-three">
    <tr>
        <th>UserName</th>
        <th>FirstName</th>
        <th>LastName</th>

        <?php
        foreach($allusers as $userdetails){
        ?>

    <tr>
        <td><a href="deleteThisUser.php?userid=<?php print $userdetails['UserID']; ?>"><?php print $userdetails['UserID']; ?></a></td>
        <td><?php print $userdetails['FirstName']; ?></td>
        <td><?php print $userdetails['LastName']; ?></td>
    </tr>

    <?php } ?>

</table>
</body>
</html>