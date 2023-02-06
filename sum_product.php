<?php 
	$given_array = array(1,2,3,6,7);
	$old_numbers = array();
	$even_numbers = array();

	for ($i=0; $i < count($given_array) ; $i++) { 
		
		if ($given_array[$i] % 2 == 0){
			//even number
			array_push($even_numbers,$given_array[$i]);

		}else{
			//old numbers
			array_push($old_numbers,$given_array[$i]);
		}

	}

	echo "Even values <br>";
	echo "---------------------------------------------<br>";
	echo "the sum is:".array_sum($even_numbers)."<br>";
	echo "the product is:".array_product($even_numbers)."<br>";
	echo "<br> <br>";
	echo "Old values <br>";
	echo "---------------------------------------------<br>";
	echo "the sum is:".array_sum($old_numbers)."<br>";
	echo "the product is:".array_product($old_numbers);

 ?>