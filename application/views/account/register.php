<h2><?= $title; ?></h2>

<?php
	if(validation_errors() != NULL){
		?>
		<div id="validation_errors" class="alert alert-dismissible alert-danger">
  <button type="button" onclick="closeFunction()" class="close" data-dismiss="alert">&times;</button>
  <br><?php echo validation_errors(); ?>
</div>
<?php
	}
?>


<?php echo form_open_multipart('account/register'); ?>
	<div class="form-group">
		<label>Profile Picture</label>
    	<input type="file" class="form-control" name="userfile" size="20">
		<label>First Name: </label>
		<input type="text" name="fname" class="form-control" placeholder="First Name">
		<label>Last Name: </label>
		<input type="text" name="lname" class="form-control" placeholder="Last Name">
		<label>Username: </label>
		<input type="text" name="uname" class="form-control" placeholder="Username">
		<label>Password: </label>
		<input type="password" name="password" class="form-control" placeholder="Password">
	</div>
		<button type="submit" class="btn btn-success">Register</button>
</form>