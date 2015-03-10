<?php
  include('../include/header.html');
  include('../include/menu.html');
?>

<div class="panel-heading">
	<h3 class="panel-title">Register Part</h3>
</div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="post" action="#">

<div class="form-group">
<label for="lbCar" class="col-sm-2 control-label">Car</label>
<div class="col-sm-2">
	<select name="sectionCar" class="form-control" id="slcar"> <!--cars from DB-->
		<option>Type 1</option>
		<option>Type 2</option>
		<option>Type 3</option>
	</select>
</div>
<label for="lbCar" class="col-sm-2 control-label">Section</label>
<div class="col-sm-2">
	<select name="sectionCar" class="form-control" id="slcar"> <!--Sections from DB-->
		<option>Engine</option>
		<option>Transmission</option>
		<option>Interior</option>
	</select>
</div>
</div>

<div class="form-group">
<label for="lbplatet" class="col-sm-2 control-label">Description</label>
<div class="col-sm-6">
	<input name="sectionDesc" type="text" class="form-control" required>
</div>
</div>

<div class="form-group">
<label for="lbdate" class="col-sm-2 control-label">Date</label>
<div class="col-sm-2">
	<input name="partDate" type="date" class="form-control" placeholder="dd/mm/YYYY">
</div>

<label for="lbprice" class="col-sm-2 control-label">Price</label>
<div class="col-sm-2">
	<input name="partPrice" type="number" class="form-control" min="0">
</div>
</div>
<div class="form-group">
<label for="lbinhands" class="col-sm-2 control-label">In Hands</label>
<div class="col-sm-1">
	<input name="partInhands" type="checkbox" class="form-control">
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