<?php
	//header('content-type: image/jpeg');
	include "connect.php";

	$select_path="select * from services";

	$var=mysqli_query($conn,$select_path);

	while($row=mysqli_fetch_array($var))
	{
		
		$service = $row["service"];
		$description = $row["description"];
		$image_name=$row["imagename"];
		$image_path=$row["imagepath"];
		
		
		//if(){
			//echo "<table><tr>";
		//}else{
			echo"<td><div class='row text-center'>
					<div class='col-md-6 offset-md-3'>
						<img src='admin/".$image_path.$image_name."' class='mx-auto rounded-circle' width='175' height='200'/> 
						<h4 class='service-heading'>".$service."</h4>
						<p class='text-muted'>".$description."</p>
				    </div>
				</div></td>"; 
		//}
		
	}
?>		