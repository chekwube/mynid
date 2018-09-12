<?php

function update($post, $table_name){
	global $conn;
	include("connect.php");
	if(isset($_POST["update"])){
		$sql4 = "SELECT title, body FROM $table_name WHERE body = '$post'";
		$query4 = mysqli_query($conn, $sql4);

		if(mysqli_affected_rows($query4) > 0){
			echo'
				<form action="update.php" method="POST">
					<div class="">
						<label for="title">Title</label>
						<input name="title" id="title" class="form-control" value="<?php echo $post; ?>">
					</div>
				
					<div class="form-group">
						<label for="body">Body</label>
						<textarea name="body" id="body" class="form-control"> <?php echo mysqli_fetch_row(); ?> </textarea>
					</div>
				
					<div class="form-group">
						<input name="create" type="submit" id="create" class="btn btn-primary pull-right" value="Create">
					</div>
				</form>
			';
		}
	}
}

?>