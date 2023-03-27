<?php

$mobile=$_POST["mobileNumber"];
$name=$_POST["name"];
$password=$_POST["password"];
$country=$_POST["country"];
$profile_picture_location = $_FILES["profile_picture"]["tmp_name"];
$urlurl = "uploads/".$mobile.".png";
$connection = new mysqli("localhost","root","abcd1234","react_chat");
$table = $connection->query("SELECT `id` FROM `country` WHERE `name`='".$country."' ");
$row = $table->fetch_assoc();
$country_id = $row["id"];
$connection->query("INSERT INTO `user`(`mobile`,`name`,`password`,`profile_url`,`country_id`) VALUES('".$mobile."','".$name."','".$password."','".$urlurl."','".$country_id."')");
move_uploaded_file($profile_picture_location,$urlurl);
?>