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
	<?php
	require_once('nav.php');
	?>

	<div class="container">
	<div class="row">
		



<!--search form-->

		<form method="post" action="scardP.php" enctype="multipart/form-data">
	<h1>Search Card Description</h1>
		
			<label for="comment">Card description - will not go into search bar </label>
		<input class="form-control" id="txtr" name="txtr" type="text">

		<label>content name</label>
		<input class="form-control" id="cnm" name="cnm" type="text" class="" >

		<br>
		

		<label>content type</label>
		<input class="form-control" id="ctp" name="ctp" type="text" class="" >

		<br>

		<label>content platform</label>
		<input class="form-control" id="mtp" name="mtp" type="text"  class="">
			
		<label>search bar</label>
		<input class="form-control" id="srch" name="srch" type="text" >
	
			
			
			
	 <div class="form-group">
    <label for="exampleFormControlSelect2" >Deck Type</label>
    <select multiple class="form-control" name="selectVal" id="exampleFormControlSelect2">
 	<option name="Reddit">Reddit</option>
    <option name="Wikipedia">Wikipedia</option>
    <option name="Stackoverflow">StackOverflow</option>
    <option name="Google Search">Google Search</option>
    <option name="Youtube">YouTube</option>
    <option name="DuckDuckGo">DuckDuckGo</option>
    </select>
  </div>

		<input type="submit" value="submit" class="btn btn-primary">
	</form>
		
		</div>
	</div>
	
		
	
	
	<!--	<p id='clickValue'></p>-->


	<!-- Optional JavaScript -->


	<script>
		
		
		
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

	
		



	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>