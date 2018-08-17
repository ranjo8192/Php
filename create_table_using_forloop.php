<?php
$rowErr = $colErr = "";
	$row = $col = "";
//if(isset($_POST['create'])){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	/* Start Server Side Form Valdation */ 
	if(empty($_POST['r'])){
		$rowErr = "Please Enter Required Rows";
	} else {
		$row = $_POST['r'];
	}
	if(empty($_POST['c'])){
		$colErr = "Please Enter Required Columns"; 
	} else {
		$col = $_POST['c'];
	}
	/* End Server Side Form Valdation */
	
	
	if($row > 0 && $col > 0){
		echo "No. of rows are=".$row. " ". "No of columns are =".$col;	
	}
	
	echo "<table border='1' width='400'>";
	for($i=0;$i<$row;$i++){
		echo "<tr>";
	
	for($j=0;$j<$col;$j++){
		echo "<td width='100'>"."r".$i."c".$j."</td>";
	}
		echo "</tr>";
	}	
	echo "</table>";
}
?>
<html>
<head>
<style>
.error{color:red;}
</style>
</head>
<body>
<form method="post">
<table width="400" border="1">
<tr>
<td width="100">Enter no of rows</td>
<td width="200"><input type="text" name="r"/><span class="error"><?php echo $rowErr ;?></span></td>
</tr>
<tr>
<td width="100">Enter no of column</td>
<td width="200"><input type="text" name="c"/><span class="error"><?php echo $colErr ;?></span></td>
<td colspan="2">
<input type="submit" name="create" value="Create"/>
</td>
</tr>
</table>
</form>
</body>
</html>