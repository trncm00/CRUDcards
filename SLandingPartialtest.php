<?php


$json_h=file_get_contents("data.json");
$json_h=json_decode($json_h,true);

foreach($json_h as $z => $c)

	
	

		switch('selectVal')

{
			case  "Google Search":			
				
				
				
				echo '
				
				<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="#" class="rounded mr-2" alt="#...">
    <strong class="mr-auto">Google Search</strong>
    <small>Bookmark Card</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">XXXXX</span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
				';
				
		
break;
				
			default:
				echo "default string";
				break;
				
				
				
				};

?>