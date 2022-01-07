<?php
    include 'connect.php';
    $id=$_GET['readid'];
    $sql="select * from `info` where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    $id = $row['id'];
    $ministry = $row['ministry'];
    $month = $row['month'];
    $income = $row['income'];
    $expensives = $row['expensives'];
    $summary = $row['summary'];
    $work_report = $row['work_report'];


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
        form {
			text-align: center;
			color: #33302f;
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
      
      
      <h1  class="my-4"><u>Work Report:</u></h1>
    <div class = "container">

   
    <form method="post" class="my-5 " >
  
   
    <div class="mb-3">
      <label  class="form-label" >Ministry</label>
      <!-- <select id="disabledSelect" class="form-select" require name="ministry" >
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
      </select> -->
     <?php echo " <B>: $ministry</B>"  ?> 
    </div>
    <div class="mb-3">
      <label  class="form-label">Month</label>
      <!-- <select id="disabledSelect" class="form-select"  name="month" require value=<?php
      echo $ministry?>>
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
      </select> -->
     <?php echo "<B>: $month</B>"  ?>
    </div>
    
  <div class="mb-3">
    <label class="form-label">Income</label>
    <!-- <input type="text" class="form-control" id="income" name="income" require value=>
  </div> -->
  <?php echo "<B>:$income</B>"  ?> </p>
  <div class="mb-3">
    <label class="form-label">Expensives</label>
    <!-- <input type="text" class="form-control" id="exampleInputPassword1" name="expensives"require value=>
  </div> -->
  <?php echo "<B>: $expensives </B>"  ?> 
  <!-- <div class="mb-3">
    <label class="form-label">Summary</label>
    <input type="text" class="form-control" id="Summary" name="summary"require>
  </div> -->
  <div class="mb-3">
    <label class="form-label">Work Report</label>
    <!-- <input type="text" class="form-control" id="workReport" name="workReport"require value=
     -->
      <?php echo "<B>: $work_report</B>"  ?> 
  </div>
  <label class="form-label">Summary</label>
    <!-- <input type="text" class="form-control" id="workReport" name="workReport"require value=
     -->
      <?php echo "<B>: $summary</B>"  ?> 
  </div>
 
</form>
    </div>
  
  </body>
</html>