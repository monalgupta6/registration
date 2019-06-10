<?php
	
	require_once "connect.php";

	$res=mysqli_query($conn, "select * from user") or die(mysqli_error($conn));
	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
			print_r(json_encode($row, true));
			
		}
	}


?>
