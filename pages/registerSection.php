<?php
  include('../include/header.html');
  include('../include/menu.html');
?>

<div class="panel-heading">
	<h3 class="panel-title">Register Section</h3>
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