<?php

//get json
$d=file_get_contents('data.json');
$d=json_decode($d,true);

$a=$_POST;

 array_push($d,$a);


$d=json_encode($d);
file_put_contents('data.json',$d);
 
header('location:index.php');

?>