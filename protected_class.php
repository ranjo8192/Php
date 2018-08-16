<?php
class A
{
	public function create()
	{
		echo "You are about to print number=" . 10 ."<br>";
	}
}
$obj = new A();
$obj->create();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sqllearning";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully" . "<br>";
$sql = "SELECT orders.OrderID, customers.CustomerName,orders.OrderDate FROM orders INNER JOIN customers ON orders.CustomerID = customers.CustomerID";
//echo $sql;
//die;
$result=$conn->query($sql);
foreach($result as $data)
{
	echo $data."<br>";
}

$arr = array(1,2,3,4,5,6,7,8);
foreach($arr as $array)
{

	foreach($arr as $rr)
	{
		echo $rr."<br>";

	}
	echo "<br>";
}
?>