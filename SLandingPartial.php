<?php
	
$json_h=file_get_contents("data.json");
$json_h=json_decode($json_h,true);
//form data loop
	foreach($json_h as $z => $c)
		//card loop
if($c['selectVal'] === "Google Search")
	///zoeanne suggested these equal signs might be the issue, put an extra equals sign
	// and it's caused no problems, but is not the solution to the doubling issue
	
	{

$resStr = str_replace(' ', '+', $c['srch']);

	echo
				'
				 <div class="row">
				<div class="col-lg-4">
				
<div class="card text-white bg-success mb-3" style="width:20rem; margin:auto;">
		
		<div class="card-body">
		
	<h2 class="card-title">Google Card<h2>
		<br><p>'.$z.'</p>
	<p class="card-text">'.$c['cnm'].'</p>
	<p class="card-text">'.$c['ctp'].'</p>
	<p class="card-text">'.$c['mtp'].'</p>
	<p class="card-text">'.$c['srch'].'</p>
	<p class="card-text">'.$c['txtr'].'</p>
		
		
	
	<a href="delete.php?'.$z.'" class="btn btn-outline-secondary" target="#">KILL</a>
		 

		 
		<a href="https://www.google.com/search?q='.$resStr.'" class="btn btn-outline-secondary" target="_blank">Google</a>

		
		<a href="searchEdit.php?'.$z.'" class="btn btn-outline-warning" target="#">Edit</a>
		
		
		</div>
		</div>
		</div>
		</div>
		';
		}

else if( $c['selectVal'] === "Bookmark" )	
	{ 


	' <div class="alert alert-info" ><role="alert"> You have made '.$z.' bookmark pages!</div>
					</div>';}

	 else if( $c['selectVal'] === "DuckDuckGo" )	
	{ 
		
$resStr = str_replace(' ', '+', $c['srch']);
				
		echo
			' 
			<div class="row">
			<div class="col-lg-4">
			
<div class="card text-white bg-info mb-3 " style="width:20rem; margin:auto;">
		
		<div class ="card-body">
			<h2 class="card-title">DuckDuckGo Card<h2>
		<br>
			<br><p>'.$z.'</p>
		<p class="card-text">'.$c['cnm'].'</p>
		<p class="card-text">'.$c['ctp'].'</p>
		<p class="card-text">'.$c['mtp'].'</p>
		<p class="card-text">'.$c['srch'].'</p>
		<p class="card-text">'.$c['txtr'].'</p>

	<a href="delete.php?'.$z.'" class="btn btn-outline-secondary" target="#">KILL</a>
		

	<a href="https://duckduckgo.com/?q='.$resStr.'" class="btn btn-outline-secondary" target="_blank">DuckDuckGo</a>
	
	<a href="searchEdit.php?'.$z.'" class="btn btn-outline-warning" target="_blank">Edit<a>
		
			</div>
		</div>
					
					</div>
					</div>';}
	
	 else if( $c['selectVal'] === "Wikipedia" )	
	{ 
		
		$resStr = str_replace(' ', '+', $c['srch']);
				
		echo
				'<div class="row">
			<div class="col-lg-4">
					
					
<div class="card text-dark bg-white mb-3 " style="width:20rem; margin:auto;">
		
		<div class="card-body"> 
		
		<h2 class="card-title">Wikipedia Card<h2>
		<br>
			<br><p>'.$z.'</p>
		<p class="card-text">'.$c['cnm'].'</p>
		<p class="card-text">'.$c['ctp'].'</p>
		<p class="card-text">'.$c['mtp'].'</p>
		<p class="card-text">'.$c['srch'].'</p>
		<p class="card-text">'.$c['txtr'].'</p>
	
	<a href="delete.php?'.$z.'" class="btn btn-outline-secondary" target="#">KILL</a>
		
		
	<a href="https://en.wikipedia.org/wiki/Special:Search?search='.$resStr.'" class=" btn btn-outline-warning" target="_blank">Wikipedia</a>
	
	<a href="searchEdit.php?'.$z.'" class="btn btn-outline-secondary" target="_blank">Edit<a>
			
			</div>
			</div>
			</div>
			</div>';}

	 else if( $c['selectVal'] === "StackOverflow" )	

	 { 
		
		$resStr = str_replace(' ', '+', $c['srch']);
				
		echo
				' 

			<div class="row">
			<div class="col-lg-4">
					
					
<div class="card text-success bg-transparent mb-3 " style="width:20rem; margin:auto;">
		
		<div class ="card-body">
			<h2 class="card-title">StackOverflow Card<h2>
		<br>
			<br><p>'.$z.'</p>
		<p class="card-text">'.$c['cnm'].'</p>
		<p class="card-text">'.$c['ctp'].'</p>
		<p class="card-text">'.$c['mtp'].'</p>
		<p class="card-text">'.$c['srch'].'</p>
		<p class="card-text">'.$c['txtr'].'</p>
	
	<a href="delete.php?'.$z.'" class=" btn btn-outline-secondary" target="#">KILL</a>
		
		
<a href="https://www.stackoverflow.com/search/?q='.$resStr.'" class="btn btn-outline-warning" target="_blank">StackOverflow</a>

<a href="searchEdit.php?'.$z.'" class=" btn btn-outline-secondary" target="_blank">Edit<a>

			</div>
		</div>
					
					</div>
					</div>';}

	//I commented a huge anomolous conditional with a blob in it, I put it in 
	//the notes.project3.may19.2020

	 else if( $c['selectVal'] === "Reddit" )	
	{ 
		 
		
		
$resStr = str_replace(' ', '+', $c['srch']);
				
		echo
				' 

			<div class="row">
			<div class="col-lg-4">
					
					
<div class="card text-white bg-danger mb-3 " style="width:20rem; margin:auto;">
		
		<div class ="card-body">
			<h2 class="card-title">Reddit Card<h2>
		<br>
			<br><p>'.$z.'</p>
		<p class="card-text">'.$c['cnm'].'</p>
		<p class="card-text">'.$c['ctp'].'</p>
		<p class="card-text">'.$c['mtp'].'</p>
		<p class="card-text">'.$c['srch'].'</p>
		<p class="card-text">'.$c['txtr'].'</p>
	
	<a href="delete.php?'.$z.'" class=" btn btn-outline-secondary" target="#">KILL</a>
		

<a href="https://www.reddit.com/search/?q='.$resStr.'" class=" btn btn-outline-secondary" target="_blank">Reddit</a>

<a href="searchEdit.php?'.$z.'" class=" btn btn-outline-warning" target="_blank">Edit<a>
		
			</div>
		</div>
					
					</div>
					</div>
					
					
					'; }
	
	 else if( $c['selectVal'] === "YouTube" )	
	{ 
		
		$resStr = str_replace(' ', '+', $c['srch']);
				
		echo
				' 
			<div class="row">
			<div class="col-lg-4">
					
<div class="card text-warning bg-dark mb-3 " style="width:20rem; margin:auto;">
		
		<div class ="card-body">
			<h2 class="card-title">Youtube card<h2>
		<br>
			<br><p>'.$z.'</p>
		<p class="card-text">'.$c['cnm'].'</p>
		<p class="card-text">'.$c['ctp'].'</p>
		<p class="card-text">'.$c['mtp'].'</p>
		<p class="card-text">'.$c['srch'].'</p>
		<p class="card-text">'.$c['txtr'].'</p>
		
	<a href="delete.php?'.$z.'" class=" btn btn-outline-secondary" target="#">KILL</a>
		
		
<a href="https://www.youtube.com/search/?q='.$resStr.'" class=" btn btn-outline-warning" target="_blank">Youtube</a>

<a href="searchEdit.php?'.$z.'" class=" btn btn-outline-danger" target="_blank">(buggy)Edit<a>

			</div>
		</div>
					
					</div>
					</div>';}

	 else if( $c['selectVal'] === "Reddit" )	
	{ 
		
		$resStr = str_replace(' ', '+', $c['srch']);
				
		echo
				' 

			<div class="row">
			<div class="col-lg-4">
			
<div class="card text-white bg-danger mb-3 " style="width:20rem; margin:auto;">
		
		<div class ="card-body">
			<h2 class="card-title">Reddit Card<h2>
		<br>
			<br><p>'.$z.'</p>
		<p class="card-text">'.$c['cnm'].'</p>
		<p class="card-text">'.$c['ctp'].'</p>
		<p class="card-text">'.$c['mtp'].'</p>
		<p class="card-text">'.$c['srch'].'</p>
		<p class="card-text">'.$c['txtr'].'</p>
			
	<a href="delete.php?'.$z.'" class=" btn btn-outline-secondary" target="#">KILL</a>
		
		
<a href="https://www.reddit.com/search/?q='.$resStr.'" class=" btn btn-outline-secondary" target="_blank">Reddit</a>

<a href="searchEdit.php?'.$z.'" class=" btn btn-outline-warning" target="_blank">(buggy)Edit<a>
			</div>
		</div>
					
					</div>
					</div>';}

	
			else
	{
			 'empty json';
		
		//print_r($k);
	}
	
	?>


