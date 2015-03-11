<?php
include('connect.php');

if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../pages/registerCar.php");
}else{
	if(isset($_POST['register'])){
		$plate = $_POST['sectionCar'];
		$description = $_POST['sectionDesc'];

		$sql="INSERT INTO `section`(`plate`, `description`) 
				VALUES ('$plate','$description')";

		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../registerCar.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../../index.html">';
			echo '<script>alert("Section Saved!")</script>';
		}

	}
}

?>