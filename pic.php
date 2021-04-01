<?php
  $db = connex();
  $msg = "";
  if (isset($_POST['upload'])) {
  	$image = $_FILES['image']['name'];
	 $target = "profil_pictures/".basename($image);
	$sql="UPDATE `users` SET `pic`='$image' WHERE email=\"".$_SESSION['email']."\"";
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  
    

     
} 

  $result = mysqli_query($db, "SELECT * FROM users where email=\"".$_SESSION['email']."\"");
  $row = mysqli_fetch_assoc($result);
   


?>