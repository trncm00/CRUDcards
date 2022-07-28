<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Edit Bookmark</title>
	</head>
	<body>
		
		<?php require_once('nav.php'); ?>
		<h1>Edit Bookmarks Here</h1>
		
		<form method="post" action="bcardPedit.php" enctype="multipart/form-data">

		<?php 
			$id = $_SERVER['QUERY_STRING'];//secret sauce q=? 
			//query_string you would never go to book mark php 
		
		
		
		//echo $id;

			$d = file_get_contents("data.json");
			$d = json_decode($d, true);
			
		
			
			$eln = $d[$id]['ln'];//edit link
			$ecat= $d[$id]['cat'];//edit category 
			$eplt = $d[$id]['plt'];//edit content platform
			$ecmt = $d[$id]['cmt'];//comment
			$eBkmrk = $d[$id]['selectVal'];//'selectVal->bookmark'? 
			

			//testing for values
				//echo $id;---0 because its first card in the array
			//echo $eln;---kotaku url because it contains the array with specific keys 
			//echo $d[$id]['cat'];---this is the array that goes into the 
				//the new variables you make in line 34
		
			?>
			
			
		
		

			
		
		<label>Edit Link</label>
		<input class="form-control" name="ln" type="url" value="<?php echo $eln;?>">
		<br>
		<label>Edit Category</label>
		<input class="form-control" name="cat" type="text" value="<?php echo $ecat;?>">
		<br>
		<label>Edit Content Platform</label>
		<input class="form-control" name="plt" type="text" value="<?php echo $eplt;?>">
		<br>
		<label>Edit Comment</label>
		<input class="form-control" name="cmt" type="text"  class="" value="<?php echo $ecmt;?>">
		
		
		 <div class="form-group">
    <label for="exampleFormControlSelect2" >Edit Deck Type</label>
    <select multiple class="form-control" name="selectVal" id="exampleFormControlSelect2">
      
	
	  <option value ="Bookmark" selected>Change to Bookmark</option>
    
      	<br>
	  
      <option></option>
    </select>
  </div>
		
		<input type="hidden" name="id" value="<?php echo $id ?>">
		
		
		
		<br>
		<input type="submit" value="Update Now" class="btn btn-primary">
		
		
		
		</form>
		
		
		
		
		
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>