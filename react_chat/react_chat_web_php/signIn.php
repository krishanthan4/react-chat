<?php

$jsonRequestText = $_POST["jsonRequestText"];
$phpRequestObject = json_decode($jsonRequestText);

$mobile = $phpRequestObject->mobile;
$password = $phpRequestObject->password;

$phpResponseObject = new stdClass();
$pattern2 = "/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{5,32}$/";

if (preg_match($pattern2, $password)) {
    $phpResponseObject->error = "Done";

}

$connection = new mysqli("localhost", "root", "abcd1234", "react_chat");
$table = $connection->query("SELECT * FROM `user` WHERE `mobile` = '" . $mobile . "' AND `password`='" . $password . "' ");



if ($table->num_rows == 0) {
    $phpResponseObject->msg = "Error";
} else {
    $phpResponseObject->msg = "Success";

    $row = $table->fetch_assoc();
    $phpResponseObject->user = $row;
}


$jsonResopnseText = json_encode($phpResponseObject);
echo ($jsonResopnseText);

?>