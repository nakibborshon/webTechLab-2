 <?php
 	$numbers=array(1,2,3,4,5);
 	$find=4;

	if(array_search($find, $numbers)){
		echo "Found";			
	}	    
	else{
		echo 'Not Found';
	}
?> 
