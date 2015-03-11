<?php
include('connect.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../pages/registerCar.php");
}else{
	if(isset($_POST['register'])){
		$model = $_POST['carModel'];
		$brand = $_POST['carBrand'];
		$plate = $_POST['carPlate'];
		$year = $_POST['carYear'];
		$color = $_POST['carColor'];

		$sql="INSERT INTO `car`(`plate`, `model`, `brand`, `year`, `color`) 
		VALUES ('$plate','$model','$brand',$year, '$color')";

		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../registerCar.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../../index.html">';
			echo '<script>alert("Car Saved!")</script>';
		}

	}
}

?>