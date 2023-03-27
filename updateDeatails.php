<?php
// $userJSONObject = $_POST['userJSONObject'];
// $phpRequestObject = json_decode($userJSONObject);
// // $profile_picture_location = $_FILES["profile_url"]["tmp_name"];
// // $urlurl = "uploads/".$phpRequestObject->mobile.".png";

// $connection =new mysqli('localhost',"root",'abcd1234','react_chat');
// $table = $connection->query("UPDATE `user` SET `mobile`='".$phpRequestObject->mobile."',`name`='".$phpRequestObject->name."',`password`='".$phpRequestObject->password."' WHERE `name`='".$phpRequestObject->user."' ");
// // move_uploaded_file($profile_picture_location,$urlurl);

// // ,`profile_url`='".$phpRequestObject->profile_url."'
// $s= 'Success';
// echo($s);

$userJSONText = $_POST['userJSONText'];
$phpObject = json_decode($userJSONText);
$phpObject->name;
$phpObject->mobile;
$phpObject->password;

$profile_picture_location = $_FILES["profile_url"]["tmp_name"];
$urlurl = "uploads/" . $mobile . ".png";
$connection = new mysqli("localhost", "root", "abcd1234", "react_chat");
$connection->query("UPDATE `user` SET (`mobile`,`name`,`password`,`profile_url`,`country_id`) VALUES('" . $mobile . "','" . $name . "','" . $password . "','" . $urlurl . "','" . $country_id . "')  ");

move_uploaded_file($profile_picture_location, $urlurl);


?>