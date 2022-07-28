<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Home</title>
</head>

<body>
<!--
	<div >
		<?php require_once('nav.php');?>
	</div>
-->
	

<div class="#">
  <div class="#">
	
	
<div class="jumbotron">
  <h1 class="display-4">C.R.U.D Cards</h1>
  <p class="lead">Create, Read, Update or Delete with Bootstrap, PHP and JSON</p>
  <hr class="my-4">
	<p></p>
  <p>Make a general search card for a subject, and choose the search engine</p>
  <p>Choose a URL from the search results and put it in a bookmark card, so you have that result forever.</p>
  </div>
  </div>
  </div>
	  
	  <div class="container">
	  <div class="row">
		  
<!--
eloy helped me set up the container row situation 
	I had multiple 
-->
<!--injected php pages-->
		  	<div class="float-left col-lg-6 bg-light"><?php require_once('search.php');?></div>
	  
	  	  	<div class="float-right col-lg-6 bg-light"><?php require_once('bookmark.php');?></div>

	
		  <div style="float:clear"></div>  
		

	


	<div class="col-lg-6 bg-light"><?php require_once('searchLanding.php');?></div>
	
	
		  
		  <div class="col-lg-6 bg-light">
		<?php require_once('bookmarkLanding.php');?></div>

		
		  
		  </div>
		</div>
	 


	
	<!--	<p id='clickValue'></p>-->


	<!-- Optional JavaScript -->
<!-- this contains some js that I dont need anymore

	<script>
		
		// I got in trouble because the return variables
				//were wrapped in quotes, which made them classes?
		
		//the real problem though, was that I had.innerHtml
		//as the final object property when it is value i am 
			//looking for. InnerHtml is dealing with text fields
			//value is dealing with input value, which I guess
			//makes the name the key. I need to know 
		
		function loader() {
			
			cnm = document.getElementById('cnm').value;
			ctp = document.getElementById('ctp').value;
			mtp = document.getElementById('mtp').value;

			return cnm + " " + ctp + " " + mtp;
		};


		//key release event
		document.getElementById('cnm').onkeyup = function()		{
			
			console.log('hey');
			document.getElementById('srch').value = loader();
		};

		document.getElementById('ctp').onkeyup = function() {
			document.getElementById('srch').value = loader();
		};

		document.getElementById('mtp').onkeyup = function() {
			document.getElementById('srch').value = loader();
		};
	</script>
-->
	
		




	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>