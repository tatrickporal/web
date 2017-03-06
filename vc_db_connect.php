<?php

// lets avoid th mysqli_connect deprecation error

error_reporting(~E_DEPRECATED & ~E_NOTICE);

$vc_host = "https://a2plcpnl0048.prod.iad2.secureserver.net:2083/cpsess6744838018/3rdparty/phpMyAdmin/index.php?token=b3d8678e0064ec431b07c0e9ce5c40fc";
$vc_user = "cpses_paoKikw3ej@localhost";
$vc_pass = "";
$vc_db = "vc_registration";

$vc_link = mysqli_connect("$vc_host","$vc_user","$vc_pass","$vc_db");

if (!$vc_link) {
	
	die("Could not connect to the Virtual closet Database: " . mysqli_error($vc_link));
}

$vc_select_db = mysqli_select_db($vc_link, $vc_db);

if (!vc_select_db) {
	
	die("cant use " . $vc_db . ":" . mysqli_error());
}

if ($vc_link && $vc_select_db == TRUE) {
	
	echo "You have connected successfully, good job. ";
}
?>