<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('./user/posts'); ?>
	<div class="form-group">
		<label>Username: </label>
		<input type="text" name="name" class="form-control" placeholder="Username">
		<label>Password: </label>
		<input type="password" name="password" class="form-control" placeholder="Password">
	</div>
	<button type="submit" class="btn btn-default">Login</button>
</form>
	<a href="register">
		<button type="submit" class="btn btn-success">Register</button>
	</a>