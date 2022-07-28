<?php
	
$d=file_get_contents("data.json");
$d=json_decode($d,true);
//form data 
	foreach($d as $k => $v)
		//card loop
if( $v['selectVal'] == "Bookmark")	
	{ 

		echo
				'
				 <div class="row">
			
			<div class="col-lg-4">

<div class="card text-white bg-warning mb-3" style="width:20rem; margin:auto;">

		<div class="card-body">
		
	<h2 class="card-title">Bookmark Card</h2>
	<br><p>'.$k.'</p>
		<p class="card-text">'.$v['ln'].'</p>
		<p class="card-text">'.$v['cat'].'</p>
		<p class="card-text">'.$v['plt'].'</p>
		<p class="card-text">'.$v['cmt'].'</p>
		

	<a href="delete.php?'.$k.'" class="btn btn-outline-secondary" target="_self">KILL</a>
	
		<a href="'.$v['ln'].'" class="btn btn-outline-secondary" target="_blank">Go to</a>
		
		<a href="bookmarkEdit.php?'.$k.'" class="btn btn-outline-secondary" target="_blank">EDIT</a>
		</div>
		</div>
		</div>
		</div>
					
				';
	}
	
		else if ($v['selectVal'] == null   ){
			echo 'empty json';
			
		}
	
	
	
	else
	
	{
		 'empty json';
	}
	
	?>



