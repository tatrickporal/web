<!DOCTYPE html>
<html>
<head>
	<title>Virtual Closet</title>
</head>
<body>

<h1>Virtual Closet Updated!</h1>
<h3>You have updated your closet, which also means that the connection to the database worked, yay.</h3>

<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "hackucsc";

$link = mysqli_connect("$db_host", "$db_username", "$db_password", "$db_name");

if(!$link) {

	die("Could not connect to database: " . mysqli_error($link));

}

$selectdb = mysqli_select_db($link, $db_name);


if (!$selectdb) {
	
	die("cant use " . db_name . ":" . mysqli_error());
}

echo "Connected successfully!";

$postshirtqty = $_POST['shirtqty'];
$postbrand_name = $_POST['brand_name'];
$postcolor = $_POST['color'];

$insertsql = "INSERT INTO inventory_shirts (shirtqty, brand_name, color) VALUES ('$postshirtqty', '$postbrand_name', '$postcolor')";

if (!mysqli_query($link, $insertsql)) {

	die("Error: " . mysqli_error($link));

}

$postpantsqty = $_POST['pantsqty'];
$postbrand_name1 = $_POST['brand_name1'];
$postcolor1 = $_POST['color1'];

$insertsql1 = "INSERT INTO inventory_pants (pantsqty, brand_name1, color1) VALUES ('$postpantsqty', '$postbrand_name1', '$postcolor1')";

if (!mysqli_query($link, $insertsql1)) {

	die("Error: " . mysqli_error($link));

}

$postshoesqty = $_POST['shoesqty'];
$postbrand_name2 = $_POST['brand_name2'];
$postcolor2 = $_POST['color2'];

$insertsql2 = "INSERT INTO inventory_shoes (shoesqty, brand_name2, color2) VALUES ('$postshoesqty', '$postbrand_name2', '$postcolor2')";

if (!mysqli_query($link, $insertsql2)) {

	die("Error: " . mysqli_error($link));

}

?>
</body>
</html>