<?php



$x = $_POST['id'];
//8:06 pm may 20, was confused about $x and its place on line 5 and 17 through 25, line 5 and 17 through 25 allow me to edit cards without making arrays into objects. 



//putting this is made the card edit and retain its []array around the obj{}
//taking it out means to bookmarks card, when edited to a google card, goes to search landing with undefined indexes and the [] array becomes an object

//echo $x;

$d = file_get_contents('data.json');
$d = json_decode($d, true);

//print_r( $d[$x] );

$d[$x]['cnm']= $_POST['cnm'];
$d[$x]['ctp']= $_POST['ctp'];
$d[$x]['mtp']= $_POST['mtp'];
$d[$x]['srch']= $_POST['srch'];

//echo '<br>';
//print_r( $d[$x] );

$d[$x]['selectVal']= $_POST['selectVal'];



$d = json_encode($d);
file_put_contents('data.json', $d);







header('location:index.php');
?>