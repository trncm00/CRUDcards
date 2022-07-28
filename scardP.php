<?php
//h is for holder
//c counter
//get json
$json_h=file_get_contents('data.json');
$json_h=json_decode($json_h,true);

//set the variable to count to object plus one

//$method_c=count($json_h);
//++$method_c;
//commented out the above code to see if this is part of the doubling problem

//capture all form values
$form_h=$_POST;

//add form data to json
//$json_h[$method_c]=$form_h;
////commented out may 20th, forcing {} and redundant, analogous to line
//21 on bcardp

//new code may 19th
array_push($json_h,$form_h);
//print_r($json_h);
//print_r($form_h);

//put it back
$json_h=json_encode($json_h);
file_put_contents('data.json',$json_h);

header('location:index.php');

?>
