<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    .floating-card {
        float: left;
        margin: 5px;
        max-width: 300px;

    }
</style>
	
	
	<title>Landing</title>
</head>

<body class="bg-primary">
	<?php
	require_once('nav.php');
	?>

	<h1>Landing</h1>

	<!--

	<div class="card" style="width:18rem;">
		<div class="card">
			<h5 class="card-title">link</h5>
			<p class="card-text">category</p>
			<p class="card-text">Search String</p>


		</div>
-->


	<?php
		//dynamically create carts
			
	
$d=file_get_contents("data.json");
$d=json_decode($d,true);
	
	

	foreach($d as $k => $v){
		//print_r($k);
		$resStr = str_replace(' ', '+', $v['cmt']);
				echo 

				'
				<h2>BOOKMARKER</h2>
				<div class="row">
					<div class="col-lg-6">
					
					
<div class="card text-white bg-warning mb-3 " style="width:20rem; margin:auto;">
		
		<div class ="card-body">
		<h5 class="card-title">'.$v['ln'].'</h5>
		<p class="card-text">'.$v['cat'].'</p>
		<p class="card-text">'.$v['plt'].'</p>
		<p class="card-text">'.$v['cmt'].'</p>
	
		
		
		<a href="'.$v['ln'].'" class=" btn btn-outline-secondary" target="_blank">Go to</a>
		
		<a href="https://www.google.com/search?q='.$resStr.'" class=" btn btn-outline-secondary" target="_blank">Google it!</a>
		
		<button type="submit" class=" btn btn-outline-secondary">Submit</button>
			</div>
		</div>
					
					</div>
					</div>
				
				';
		}?><?php
	
	//this is the second for each statement and it should be 
		//linked to a different dh.pp 
	
	/*
	The foreach construct provides an easy way to iterate over arrays. foreach works only on arrays and objects, and will issue an error when you try to use it on a variable with a different data type or an uninitialized variable. There are two syntaxes:

foreach (array_expression as $value)
    statement
foreach (array_expression as $key => $value)
    statement
The first form loops over the array given by array_expression. On each iteration, the value of the current element is assigned to $value and the internal array pointer is advanced by one (so on the next iteration, you'll be looking at the next element).

The second form will additionally assign the current element's key to the $key variable on each iteration.
	*/
	
	// so in the below case you must refer to the 
		//actual name when you use the //$variable["name "], i wonder if
		//the first form is more of an index
		//counter as it can only touch the value
		//and then move on to the next one 
		//you can't call it the same, you 
		//might use it to make a list and
		//then organize it using methods. 
$json_h=file_get_contents("data.json");
$json_h=json_decode($json_h,true);
	
	foreach($json_h as $z => $c){
		//print_r($k);
		$resStr = str_replace(' ', '+', $c['srch']);
				echo 
				'
				
				<h2>GOOGLER</h2>
				<div class="row">
					<div class="col-lg-6">
				
<div class="card text-white bg-success mb-3" style="width:18rem; ">
		
		<div class ="card-body">
	
		
		<p class="card-text">'.$c['cnm'].'</p>
		<p class="card-text">'.$c['ctp'].'</p>
		<p class="card-text">'.$c['mtp'].'</p>
		<p class="card-text">'.$c['srch'].'</p>
		
		
		
		
		<a href="'.$c['srch'].'" class=" btn btn-outline-secondary" target="_blank">Go to</a>
		
		<a href="https://www.google.com/search?q='.$resStr.'" class=" btn btn-outline-secondary" target="_blank">Google it!</a>
		
		<button type="submit" class=" btn btn-outline-secondary">Submit</button>
		
		</div>
			</div>
		</div>
		';
		}
	
	
	
	?>



	<!-- Optional JavaScript -->
	<!--	<script>
			
		document.location("ln");
		
		
	function process(){
		
		ln = document.getElementsByClassName('ln').value;
		cat = document.getElementsByClassName('cat').value;
		sch = document.getElementsByClassName('sch').value;
		plt = document.getElementsByClassName('plt').value;
		cmt = document.getElementsByClassName('cmt').value;
		
		return ln + " " + cat + " " + sch + " " + plt + " " + cmt + " ";
	}; 
		*/
			//click event
		document.getElementById('clickEvent').onclick = function(){
			document.getElementById('clickValue').innerHTML = process();
		};
	</script>-->


	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>