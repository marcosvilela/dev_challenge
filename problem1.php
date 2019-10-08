<? php

#Problem 1 - Create a method to validate inputs from a form

function validate_inputs($inputdata){
	$name = $inpudata['name'];
	$email = $inputdata['email'];
	$twitt = $inputdata['twitter'];
	$email_regex = '/^([a-z0-9\._-]+)@([a-z0-9]+)\.([a-z\.])/';
	$twitter_handle_regex = '/^@([a-zA-Z0-9\._-]+)/';
	$name_regex = '/^([a-zA-z]+)( )([a-zA-z]+)/';
	$retorno = true;

	//If name or email are empty, throw an exception
	if((strlen($name)==0) or (strlen($email) == 0)){
		throw new Exception('Name must not be empty!');
	}
	
	//If e-mail is not valid, throw an exception
	if(!preg_match($email_regex, $email)){
		throw new Exception('Invalid e-mail!');
	}

	//If name is not valid, throw an exception
	if(!preg_match($name_regex, $name)){
		throw new Exception('Invalid name!');
	}
	//If twitter handle exists and it's not valid, throw an exception
	if(strlen($twitt)>0){
		if(!preg_match($twitter_handle_regex, $twitt)){
			throw new Exception('Invalid twitter handler!');
		}
	}
	//if it doesn't throw any exception, returns true because inputs were validated
	return $retorno;
}

//A valid input with the optional twitter handler
$input_true = [
	'name'=>'Marcos Vilela',
	'email'=>'marcos.vilela42@hotmail.com',
	'twitter'=>'@marcos_vilela42'
	];

//A valid input without the optional twitter handler
$input_true2 = [
	'name'=>'Marcos Vilela',
	'email'=>'marcos.vilela42@hotmail.com',
	'twitter'=>''
	];

//An invalid input
$input_false = [
	'name'=>'Marcos',
	'email'=>'marcos.vilela42@hotmail.com',
	'twitter'=>''
	];

	echo print_r(validate_inputs($input_true));
	echo print_r(validate_inputs($input_true2));
	echo print_r(validate_inputs($input_false));


?>
