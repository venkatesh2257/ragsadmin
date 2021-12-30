<?php
    include 'connect.php';
    if(isset($_POST['Submit'])) {

	$ministry = $_POST['ministry'];
	$month = $_POST['month'];
	$income = $_POST['income'];
	$expensives = $_POST['expensives'];
	$summary = $income - $expensives;
	$workReport = $_POST['workReport'];

	//Data inserting into the database 
	
	$sql_query = "INSERT INTO info (ministry,month,income,expensives,summary,work_report)
	VALUES ('$ministry','$month','$income','$expensives','$summary','$workReport') ";


	 if (mysqli_query($conn,$sql_query))
	  {
	 	echo"New details Entered successfully !";
	 	header('location:show.php');

	 }
	 else
	 {
	 	echo "Error: ".$sql."".mysqli_error($conn);
	 }

	 mysqli_close($conn);
}
?>



<!doctype html>
<html lang="en">
  <head>
  <style>

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

	
		

		
	</style>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Rags Form</title>
    
  </head>
  <body>
      
      
      <h1>Work Report</h1>
    <div class = "container">


    <form method="post" >
  
   
    <div class="mb-3">
      <label  class="form-label" >Ministry</label>
      <select id="disabledSelect" class="form-select" require name="ministry">
        <option value="Rags">Rags</option>
        <option value="FWM">FWM</option>
        <option value="Exedos">Exedos</option>
        <option value="SajiniGarments">SajiniGarments</option>
        <option value="Dove">Dove</option>
        <option value="Studio">Studio</option>
        <option value="RescueHome">RescueHome</option>
        <option value="Medical">Medical</option>
        <option value="IBC">IBC</option>
        <option value="WorshipTeam">WorshipTeam</option>
      </select>
    </div>
    <div class="mb-3">
      <label  class="form-label">Month</label>
      <select id="disabledSelect" class="form-select"  name="month" require>
      <option value="Jan">Jan</option>
	  <option value="Feb">Feb</option>
	  <option value="March">March</option>
	  <option value="April">April</option>
	  <option value="May">May</option>
	  <option value="Jun">Jun</option>
	  <option value="July">July</option>
	  <option value="Aug">Aug</option>
	  <option value="Sept">Sept</option>
	  <option value="Oct">Oct</option>
	  <option value="Nov">Nov</option>
	  <option value="Dec">Dec</option>
      </select>
    </div>
    
  <div class="mb-3">
    <label class="form-label">Income</label>
    <input type="text" class="form-control" id="income" name="income" require>
  </div>
  <div class="mb-3">
    <label class="form-label">Expensives</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="expensives"require>
  </div>
  <!-- <div class="mb-3">
    <label class="form-label">Summary</label>
    <input type="text" class="form-control" id="Summary" name="summary"require>
  </div> -->
  <div class="mb-3">
    <label class="form-label">Work Report</label>
    <input type="text" class="form-control" id="workReport" name="workReport"require>
  </div>
  <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
</form>
    </div>
  
  </body>
</html>