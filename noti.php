

<?php
include('connection.php');



date_default_timezone_set("Etc/GMT+8");
 
	$query1 = mysqli_query($conn, "SELECT * FROM `tbl_guideline`");
	$date = date("Y-m-d");
	
	while($fetch = mysqli_fetch_array($query1)){
		$z=$fetch['g_id'];
		if($fetch['date'] == $date){
			mysqli_query($conn, "DELETE FROM `tbl_guideline` WHERE `g_id` = '$z'") or die(mysqli_error());
		}
	}
?>