<?php
$mobile = $_POST["mobileNumber"];
$name = $_POST["name"];
$password = $_POST["password"];
$profile_picture_location = $_FILES["profile_picture"]["tmp_name"];
$urlurl = "uploads/" . $mobile . ".png";

$connection = new mysqli("localhost", "root", "abcd1234", "react_chat");
$table2 = $connection->query("SELECT * FROM `user` WHERE `mobile`='" . $mobile . "' ");
$phpResponseObject = new stdClass();

if ($table2->num_rows !== 0) {
    $phpResponseObject->errorM = 'Same';
} else {
    $phpResponseObject->errorM='';
        $connection->query("INSERT INTO `user`(`mobile`,`name`,`password`,`profile_url`) VALUES('" . $mobile . "','" . $name . "','" . $password . "','" . $urlurl . "')");
        move_uploaded_file($profile_picture_location, $urlurl);   
}
$jsonResopnseText = json_encode($phpResponseObject);
echo ($jsonResopnseText);
?>