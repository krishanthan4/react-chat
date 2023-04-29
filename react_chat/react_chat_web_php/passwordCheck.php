<?php


$password=$_POST['password'];

$connection=new mysqli('localhost','root','abcd1234','react_chat');
$table=$connection->query("SELECT * FROM `user` WHERE `password`='".$password."'");

if($table->num_rows!==0){
    $reply= 'Done';
   
}else{
    $reply= 'no';

}

echo(json_encode($reply));
?>