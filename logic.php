<?php

//  *****************  Determines how many words in the password, and whether there will be symbols, numbers or uppercase

if (isset($_POST['count'])){
	$count=$_POST ['count'];

	//checking code

	//	if (!is_numeric($count)) {
	//		# ensure that nobody put letters in the number field
	//		echo 'ERROR: number input expected';
	//		return;
	//	}


	} else {
		echo 'please input a number';
		$count = 0;
		# takes the number from the number of words field, and send that to the 'array generator' (see below)
		#if no number is supplied, do nothing

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



//************** Processes the options and creates the actual password array, returns that password to the content.php page



if ($words = file('words2.txt')){
						//use file() to take the words.txt file and turn every line into an element in the array $words:

	
	$selected_words = [];  //create an empty array that will hold the list of words for the password
	$getsymbol = ['!', '@', '#', '$', '%', '&', '*'];  //contains the symbols that will be used in the symbol option
	$getnumber = [0,1,2,3,4,5,6,7,8,9];  //numbers for the number option
	
		for ($i=0; $i < $count ; $i++) {    //get number of words for the $selected_words array, based on $count

			// generate random number from zero to dictionary size:

			$max = count($words) -1; //determine the size of the array
			$rand = rand(0, $max);  //get a random number between zero and the largest element in the array

			//add item to an array:

			$word = $words[$rand];   //find a random word

		
			array_push($selected_words, $word); //add this to the $selected_words array

			}

		if ($uppercase){
			
			//loop through words and change first letter to uppercase

			foreach ($selected_words as $index => $word) {

				$selected_words[$index] = ucfirst($word); 
				
			}

		}

		if ($symbol){
			$newsymbol= array_rand($getsymbol, 1);  //get a random element from the array $getsymbol and call variable $newsymbol
			array_push($selected_words, $newsymbol); //add this to the $selected_words array


			
		}


		if ($number){
			$newnumber = array_rand($getnumber, 1);  //get random element from the array $getnumber and call varialble $newnumber
			array_push($selected_words, $newnumber);

			

		}

	$password = implode("", $selected_words);

}








// pull data from the form

//run logic on form responses

// update variables to send back

// cleanup with any helper functions

//you have 4 days to complete this project!  (no pressure)