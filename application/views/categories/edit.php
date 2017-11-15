<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>
<?php foreach($categories as $category) : ?>
<?php echo form_open('/categories/update/'.$category['cat_id']); ?>
	<div class="form-group">
		<?php echo $category['cat_id']; ?>
		<label>Category Name: </label>
			<input type="text" name="category_name" class="form-control" value="<?php echo $category['cat_name']; ?>" placeholder="Enter Category">
		<?php endforeach; ?>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>