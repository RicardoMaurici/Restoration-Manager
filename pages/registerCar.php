<?php
  include('../include/header.html');
  include('../include/menu.html');
?>

<div class="panel-heading">
	<h3 class="panel-title">Register Car</h3>
</div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="post" action="db/dbCar.php">

<div class="form-group">
<label for="lbmodel" class="col-sm-2 control-label">Model</label>
<div class="col-sm-2">
	<input name="carModel" type="text" class="form-control" required>
</div>
<div class="col-sm-5">
<label for="lbbrand" class="col-sm-2 control-label">Brand</label>
<div class="col-sm-5">
	<input name="carBrand" type="text" class="form-control" required>
</div>
</div>
</div>

<div class="form-group">
<label for="lbplatet" class="col-sm-2 control-label">Plate</label>
<div class="col-sm-2">
	<input name="carPlate" type="text" class="form-control" required>
</div>
<div class="col-sm-5">
<label for="lbyear" class="col-sm-2 control-label">Year</label>
<div class="col-sm-5">
	<input name="carYear" type="number" class="form-control"  placeholder="YYYY" required>
</div>
</div>
</div>

<div class="form-group">
<label for="lbcolor" class="col-sm-2 control-label">Color</label>
<div class="col-sm-2">
	<input name="carColor" type="text" class="form-control">
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