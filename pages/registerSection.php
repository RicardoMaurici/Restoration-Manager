<?php
  include ('db/connect.php');
  include('../include/header.html');
  include('../include/menu.html');
?>

<div class="panel-heading">
	<h3 class="panel-title">Register Section</h3>
</div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="post" action="db/dbSection.php">

<div class="form-group">
<label for="lbCar" class="col-sm-2 control-label">Car</label>
<div class="col-sm-2">
	<select name="sectionCar" class="form-control" id="slcar"> <!--cars from DB-->
		<?php
			$sql="SELECT*FROM car";
			$result=mysql_query($sql);
			while($row=mysql_fetch_array($result)){
		?>
		<option value=<?php echo $row['plate'];?>><?php echo $row['model']; ?></option>
		<?php } ?>
	</select>
</div>
</div>

<div class="form-group">
<label for="lbplatet" class="col-sm-2 control-label">Description</label>
<div class="col-sm-6">
	<input name="sectionDesc" type="text" class="form-control" required>
</div>
</div>

&nbsp&nbsp&nbsp&nbsp
<div class="form-group">
<div class="col-sm-2">
</div>
	<button name="register" type="submit" class="btn btn-primary" style="width: 25%;" id="register">Register</button>
</div>

</form>

</div>

<?php
  include('../include/footer.html');
?>