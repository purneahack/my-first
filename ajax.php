<?php

//checks to see if a particular variable exists:		
if(isset($_POST['state'])){
    //it exists
    echo $_POST['state'];
} else{
    echo "it does not exist.";
}

// array_key_exists, which checks to see if a particular index exists:
if(array_key_exists('state', $_POST)){
    //it exists
    echo $_POST['state'];
} else{
    echo "array key does not exist";
}

//$state = (isset($_POST['state']) ? $_POST['state'] : null);

//if(isset($_POST["state"])){
	//$state=$_POST["state"];
//}


//$state=$_POST['state']; //my query is not working. I am not able to get $sate value. here $sate value cannot get the value.
$state = intval($_POST['state']);
//$state=$_REQUEST["state"];


$servername = "localhost";
$username = "root";
$password = "moinuddin@1";
$dbname = "slcsa";
$link = mysqli_connect('localhost', 'root', 'moinuddin@1', 'slcsa');
if (!$link) {
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connection to database established";


	//if ($state!=""){	
	//if (!empty($state)){
		//$res = mysqli_query($link,"SELECT * FROM district_code WHERE State Code='$state'");
		$res = mysqli_query($link,"SELECT * FROM district_code WHERE State Code = '".$state."'");
		echo "<select>";
			//while($row = mysqli_fetch_array($res)){
			while($row = mysqli_fetch_array($res)){
				echo "<option>"; echo $row["District Name"]; echo "</option>";
			}
		echo "</select>";
	//}
	
	//mysqli_close($link);
?>
