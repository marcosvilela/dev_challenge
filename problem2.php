<? php

#Problem 2 - Write a JSON formatter with the names ordered alphabetically

//Array to be sorted and formatted
$employees = array('Travis' => 29, 'John' => 30, 'Manny' => 24, 'Gabriel' => 20, 'Yogi' => 22);


function format_json($arr){	
	$sorted_arr = $arr; //Copy the input array
	$json_formatted = array(); //create an empty array to be formatted later
	ksort($sorted_arr);  //Sort the array in ascending order according to key (name)
	$sorted_values = array_values($sorted_arr); //Sorted values
	$sorted_keys = array_keys($sorted_arr); //Sorted keys

	for($i = 0; $i < count($sorted_arr); $i++){
		//Iterate through the sorted array and append the pre-formatted array
		$json_formatted[$i] = array('name'=>$sorted_keys[$i],
									'age'=>$sorted_values[$i]);
	}

	//Returns the formatted array
	return json_encode($json_formatted);
}

//Test it on $employees
echo (format_json($employees));

?>