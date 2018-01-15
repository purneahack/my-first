<?php
$link = mysqli_connect('localhost', 'root', 'moinuddin@1', 'slcsa');

if (!$link) {
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connection to database established";

$state=$_POST['state']; //my query is not working. I am not able to get $sate value. here $sate value cannot get the value.

	if ($state!=""){	
	//if (!empty($state)){
		//$res = mysqli_query($link,"SELECT * FROM district_code WHERE State Code='$state'");
		$res = mysqli_query($link,"SELECT * FROM district_code WHERE State Code = '".$state."'");
		echo "<select>";			
			while($row = mysqli_fetch_array($res)){
				echo "<option>"; echo $row["District Name"]; echo "</option>";
			}
		echo "</select>";
	}	
	
?>
