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
	
	<form method="post" action="bcardP.php" name="bkmrkFrm" enctype="multipart/form-data">
		
			<h1>Bookmarker</h1>
		
		<label>Link</label>
		<input class="form-control" name="ln" type="url" id="InputValue" value="" >

		<br><hr><hr><br>
		
		

		<label>category</label>
		<input class="form-control" name="cat" type="text">

		<br>
		

		<label>content platform</label>
		<input class="form-control" name="plt" type="text" >

		<br>

		<label>comment</label>
		<input class="form-control" name="cmt" type="text"  >

<!--		<input type="radio" name="bkmrk" value="true" checked>-->
		
		
		
		 <div class="form-group">
    <label for="exampleFormControlSelect2" >Choose Deck Type</label>
    <select multiple class="form-control" name="selectVal" id="exampleFormControlSelect2">
        <option name ="Bookmark">Bookmark</option>
    </select>
 </div>
		<div>
		<input type="submit" value="submit" class="btn btn-primary">
</div>
	

	
	</form>

	</div>
	</div>


		
	
	
	<!--	<p id='clickValue'></p>-->


	<!-- Optional JavaScript -->


		




	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
