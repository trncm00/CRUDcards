<?php

$x = $_POST['id'];

//8:06 pm may 20, was confused about $x and its place on line 5 and 17 through 25, line 5 and 17 through 25 allow me to  edit cards without making arrays into objects. 




//putting this is made the card edit and retain its []array around the obj{}
//taking it out means to bookmarks card, when edited to a google card, goes to search landing with undefined indexes and the [] array becomes an object

//$k drops in id

$d = file_get_contents('data.json');//gets em
$d = json_decode($d, true);
 
// array_push($d,$a);

//echo $d[$x]['ln'];
//echo $d[$a]['ln'];
//echo $d[$a]['cat'];



//$x is no longer a factor
$d[$x]['ln']= $_POST['ln'];//
$d[$x]['cat']= $_POST['cat'];//
$d[$x]['plt']= $_POST['plt'];//
$d[$x]['cmt']= $_POST['cmt'];//
//restricting $d to specific index of array


$d[$x]['selectVal']= $_POST['selectVal'];




//eloy had me cut out a whole bunch of crap here
//basically, i thought every value had to be specifically found in the json
//object turned array but it didn't, the form needs to be populated by
//an object that was pre made in a previous process, otherwise, you 
//would not be editing it. 
//echo '<br>';


$d = json_encode($d);
file_put_contents('data.json', $d);//puts em back

header('location:index.php');
?>
