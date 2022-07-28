<?php 


			$id = $_SERVER['QUERY_STRING'];//secret sauce q=?			
//query_string you would never go to book mark php 
		//id grabs the number
//use unset
//call dollar sign d braces dollars sign id
		
		
		//echo $id;
$x = $_POST['id'];

			$d = file_get_contents("data.json");
			$d = json_decode($d, true);
			

$select=$d[$id]['selectVal'];//find out what that value is
//this holds bookmar or searxh before it is destroyed do you can 
//use it to compare values and send them to the right place

//remember that $select=$d[$id]['selectVal']; had to be put
//above line 21 because it has is destroyed there so 
//i would be calling an undefined value, which had already been //destroyed


unset ($d[$id]);
//print_r($d);

$d = json_encode($d);
file_put_contents('data.json', $d);
//this sends the user back to the correct deck

if($select=="Bookmark"){
	
header('location:index.php');
}
else {header('location:index.php');};




		?>