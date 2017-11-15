<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Category: </label>
    <select class="form-control" name="category_id">
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['cat_id']; ?>"><?php echo $category['cat_name'] ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label>Post Image</label>
    <input type="file" class="form-control" name="userfile" size="20">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name="body" placeholder="Add Body">
    </textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
