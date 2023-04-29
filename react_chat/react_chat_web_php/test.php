<?php

$array= array();
$object1=new stdClass();
$object->id = "4";
$object->name = "C#";
aray_push($array,$object1);

$object2 = new stdClass();
$object2->id="5";
$object2->name="Objective-C";
array_push($array,$object2);

echo(json_encode($array));

?>