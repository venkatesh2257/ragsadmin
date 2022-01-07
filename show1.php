<!-- <?php

 include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" >
	<!-- content="width=device-width, initial-scale=1.0" -->
	<title>Show-data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
	<div class="container">
	<button class="btn btn-primary  my-5"><a href="add_data.php" class="text-light">Add Data</a>
	</button>
	</div>
			<table class="table" >
  <thead>
    <tr>
      <th scope="col">SNO</th>
      <th scope="col">Ministry</th>
      <th scope="col">Month</th>
      <th scope="col">Income</th>
	  <th scope="col">Expensives</th>
	  <th scope="col">Summary</th>
	  <th scope="col">Workreport</th>
	  <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql = "Select * from 'info'";
$result= mysqli_query($conn,$sql);
if($result  ){
while($row=mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $ministry = $row['ministry'];
    $month = $row['month'];
    $income = $row['income'];
    $expensives = $row['expensives'];
    $summary = $row['summary'];
    $workreport = $row['workreport'];

    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$ministry.'</td>
    <td>'.$month.'</td>
    <td>'.$income.'</td>
    <td>'.$expensives.'</td>
    <td>'.$summary.'</td>
    <td>'.$workreport.'</td>
  </tr>'; 
    
    

}

}




?>


 
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr> -->
  </tbody>
</table>
</body>
</html> -->






<!-- 


<?php

// Username is root
$user = 'root';
$password = '';

// Database name is work_details
$database = 'work_details';

// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM info ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Employee_working_report_page</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Employee Monthly Report</h1>
		<!-- TABLE CONSTRUCTION-->
		<table id="datatab">
			<tr>
                <th>Sl No</th>
				<th>Ministry</th>
				<th>Month</th>
				<th>Income</th>
				<th>Expensives</th>
				<th>Summary</th>
				<th>workReport</th>	
                <th>Operations</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php	 // LOOP TILL END OF DATA
		
		if($result){
		while ($rows=$result->fetch_assoc())
		{
			$id = $row['id'];
    		$ministry = $row['ministry'];
			$month = $row['month'];
			$income = $row['income'];
			$expensives = $row['expensives'];
			$summary = $row['summary'];
			$workreport = $row['workreport'];	
			
			echo '<tr>
				<th scope > ['.$id.']</th>
				<td> ['.$ministry.']></td>
				<td> ['.$month.']></td>
				<td> ['.$income.']></td>
				<td> ['.$expensives.']></td>
				<td><['.$summary.']></td>
				<td> ['.$work_report.']></td>
                <td>
                    <button class="btn btn-primary"><a href=""class="text-light">Read</a></button>
                    <button class="btn btn-primary"><a href="update.php">Update</a></button>
                    <button class="btn btn-primary"><a href="delete.php? deleteid='.$id.'">Delete</a></button>
                </td>
			</tr>';
			
		
			 }
				 }
			?>
		</table>
	</section>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    
    <script>
$(document).ready(function() {
    $('#datatab').DataTable();
} );
</script>
</body>

</html>

 -->