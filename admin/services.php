<?php
	if(isset($_POST["submit1"])){
		$name = mysqli_real_escape_string($conn, $_POST["name"]);
		$description = mysqli_real_escape_string($conn, $_POST["description"]);
		
		$success = "<b class='text-success'>Successfully Added!</b>";
		$failure = "<b class='text-danger'>Failed!</b>";

		$upload_image=$_FILES["myimage"]["name"];
		$folder="file/";
		move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]);
		
			if(!empty($name) && !empty($description) && !empty($folder) && !empty($upload_image)){
				$insert_path="INSERT INTO services(`service`,`description`,`imagepath`,`imagename`) VALUES('$name','$description','$folder','$upload_image')";
				$var=mysqli_query($conn,$insert_path);
				if($var){
					echo $success;
				}else{
					echo $failure;
				}
			}
		
	}
?>