<?php 

/*
Improve the following code:
	$arr = array('foo', 'bar', 'baz');
	$i = 0;
	while($i < count($arr)) {
	    echo $arr[$i];
	    $i++;
	}
What it does is iterate through the array and echoes each value of it
We can do this using foreach to iterate through the array and echo each value
*/

$arr = array('foo', 'bar', 'baz');

foreach($arr as $value){
	echo $value;
}


?>