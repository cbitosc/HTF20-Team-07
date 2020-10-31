<?php
	include_once '/conn.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
	<div class="title">
            <img src="" alt="">
            <h1>PLACEMENT MANAGEMENT</h1>
            <p><small>Check GPA eligibility to apply for specific company</small></p>
        </div>
<div class="datablock">
<div class="question">

<form method="post">  
Enter your CGPA:  
<input type="number" name="number1" />
<input  type="submit" name="submit" value="Check"> <br><br>
</form>  


<?php

	if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
  
	}


		
	$sql = "SELECT * FROM Companies WHERE CGPA > $number1 ;" ;
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result) ;

	if ($resultCheck > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo $row['SNo']."  ".$row['COMPANY']." <br>";
		}
	}
?>

</div>
</div>
</div>
</body>
</html>
