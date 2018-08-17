<?php
ini_set('display_errors', 0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "SELECT * FROM emp_salary ORDER BY emp_salary DESC limit 1";
//SELECT MAX(salary) FROM Employee WHERE Salary NOT IN ( SELECT Max(Salary) FROM Employee);
// Get Second Max Salary Salary From the table

//$sql1 = SELECT MAX(salary) FROM emp_salary WHERE salary < (SELECT MAX(salary) FROM emp_salary);
$sql = "SELECT MAX(salary), emp_id FROM emp_salary WHERE salary < (SELECT MAX(salary) FROM emp_salary)";
$result = $conn->query($sql);
//var_dump($result);
//print_r($result);
//die;
if ($result->num_rows > 0) {
    // output data of each row
	/* fetch associative array */
    while($row = $result->fetch_assoc()) {
        echo "<br> Employee Id: ". $row["emp_id"]. " -Employee Salary: ". $row["MAX(salary)"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
