<?php

if (isset($_POST['count'])){
	$count=$_POST ['count'];

	//checking code

	if (!is_numeric($count)) {
		# ensure that nobody put letters in the number field
		return 'ERROR: number input expected';
	}

echo $count . '<br />';
	

} 