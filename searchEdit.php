<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Edit Search Cards</title>
	</head>
	<body>
		
		<?php require_once('nav.php'); ?>
		
		<h1>Edit Search Cards<h1>

<form method="post" action="scardPedit.php" enctype="multipart/form-data">

		<?php 
			$id = $_SERVER['QUERY_STRING'];//secret sauce q=? 
			//query_string you would never go to book mark php 
		
		
		
		//echo $id;

			$d = file_get_contents("data.json");
			$d = json_decode($d, true);
			
		
		
			$ecnm = $d[$id]['cnm'];//content name
			$ectp= $d[$id]['ctp'];//content type
			$emtp = $d[$id]['mtp'];//media type
			$esrch = $d[$id]['srch'];//search
			$eval = $d[$id]['selectVal'];//'selectVal->bookmark'? ?>
		

		<label>edit content name</label>
		<input class="form-control" id="cnm" name="cnm" type="text" value="<?php echo $ecnm;?>">

		<br>
		

		<label>edit content type</label>
		<input class="form-control" id="ctp" name="ctp" type="text" value="<?php echo $ectp;?>">

		<br>

		<label>edit media type</label>
		<input class="form-control" id="mtp" name="mtp" type="text" value="<?php echo $emtp;?>">
			
<!--	testing a whitespace bug-->
	
		<label>edit search</label>
		<input class="form-control" id="srch" name="srch" type="text" value="<?php echo $esrch;?>">
	
			
			
			
	 <div class="form-group">
    <label for="exampleFormControlSelect2" >Edit Deck Type</label>
    <select multiple class="form-control" name="selectVal" id="exampleFormControlSelect2">
<!--      <option value ="Bookmark">Change to Bookmark</option>-->
    
      <option value="Reddit">Change to Reddit</option>
      <option value="Wikipedia">Change to Wikipedia</option>
      <option value="StackOverflow">Change to StackOverflow</option>
		<br>
      <option value="Google Search">Change to Google Search</option>
      <option value="Youtube">Change to YouTube</option>
		<br>
      <option value="DuckDuckGo">Change to DuckDuckGo</option>
      	<br>
	  <option></option>
      <option></option>
    </select>
  </div>
		
		<input type="hidden" name="id" value="<?php echo $id ?>">

		<input type="submit" value="Update now" class="btn btn-primary">
	</form>
			
		
		
			
			

	
			
			
	
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
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>