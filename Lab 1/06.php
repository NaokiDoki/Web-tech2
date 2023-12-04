<html>
	<body>
	<?php
		$num = 10;
		$count = 0;

		for($i = 1; $i <= $num; $i++){
			if ($num % $i == 0){
				$count +=1;
			} 
		} 
		if($count == 2){	
			echo "$num is prime";
		}
		else{
			echo "$num is not prime";
		}

	?>
	</body>

</html>
