<?php
$link = mysqli_connect('localhost', 'root', 'moinuddin@1', 'slcsa');
?>

<form name="form1" action="" method="post">
	<table>
		<tr>
			<td>Select State</td>
			<td><select id="statedd" class="statedd" onchange="change_state(this.value)">
				<option value="">Select</option>
				<?php 
					$res = mysqli_query($link,"SELECT * FROM state_code");
					while($row = mysqli_fetch_array($res)){
				?>
						<option value="<?php echo $row["State Code"]; ?>"> <?php echo $row["State Name"]; ?> </option>
				<?php
					}
				?>
			</select></td>
		</tr>
		<!--create another dropdownlist-->
		<tr>
			<td>Select District</td>
			<td>
				<div id="districtdd">
					<select>
						<option>Select</option>
					</select>
				</div>
			</td>
		</tr>		
	</table>	
</form>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="jquery.min.js"></script>

<script type="text/javascript">

function change_state()
{
	var xmlhttp=new XMLHttpRequest();	
	xmlhttp.open("POST", "ajax.php?state="+document.getElementById("statedd").value, false);
	xmlhttp.send(null);	
	document.getElementById("districtdd").innerHTML=xmlhttp.responseText;	
}

</script>