<form action="problem5.php" method="post">
    Date (on 'YY-MM-DD' format) <input type="text" name="dateinput" /><br />
    <input type="submit" value="Me aperte!" />
</form>

<? php

$servername = "localhost";
$db = "problem4";
$usr = "root";
$pass = "";

//Create a connection to the database
$connection = mysqli_connect($servername, $usr, $pass, $db);

//Check if connection is OK
if($connection->connect_error){
die("Failed connection! Error: ".$connection->connect_error);
}

echo "Connected successfully!";

//HERE WE BUILD THE QUERY AND SEND/RECEIVE IT

function mount_query($date){

$query = "SELECT product_quantity.quantity, product.price FROM table_order, product, product_quantity
WHERE product.product_id = table_order.product_id
	AND product_quantity.pq_id = table_order.pq_id
	AND product_quantity.product_id = table_order.product_id
	AND table_order.order_date =".$date.";";

return $query;
}
 

$queryfinal = mount_query($_POST['dateinput']);
$result =mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result)){
//echoes the result  array from the query
echo $row;
}

//THEN WE CLOSE THE CONNECTION
mysqli_close($connection);



?>

