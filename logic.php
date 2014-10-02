<?php

//  *****************  Determines how many words in the password, and whether there will be symbols, numbers or uppercase



//$$$$$$$$$$  there is something wrong with the code here:

if (isset($_POST['count'])){
	$count=$_POST ['count'];

	//checking code

	if (!is_numeric($count)) {
		# ensure that nobody put letters in the number field
		return 'ERROR: number input expected';
	}


	

} else {
	$count = 1;
	# takes the number from the number of words field, and send that to the 'array generator' (see below)
	#if no number is supplied, assume one word
}

if (isset($_POST['uppercase'])){
	$uppercase = true;
	}   
	else {
	$uppercase = false;
}

if (isset($_POST['symbol'])){
	$symbol = true;
	}   
	else {
	$symbol = false;
}

if (isset($_POST['number'])){
	$number = true;
	}   
	else {
	$number = false;
}



//check - the count from the form should be a number, not a letter, and it shouldn't be larger than ...




if ($words = file('words.txt')){
						//use file() to take the words.txt file and turn every line into an element in the array $words:

	
	$selected_words = [];  //create an empty array that will hold the list of words for the password


	for ($i=0; $i < $count ; $i++) {    //get number of words for the $selected_words array, based on $count

		// generate random number from zero to dictionary size:

		$max = count($words) -1; //determine the size of the array
		$rand = rand(0, $max);  //get a random number between zero and the largest element in the array

		//add item to an array:

		$word = $words[$rand];   //find a random word

		echo $word . '<br />';  //test to make sure that the logic is working

		array_push($selected_words, $word); //add this to the $selected_words array

		}

	}








// pull data from the form

//run logic on form responses

// update variables to send back

// cleanup with any helper functions

//you have 4 days to complete this project!  (no pressure)