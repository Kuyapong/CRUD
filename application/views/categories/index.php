<h2><?= $title; ?></h2>
<table class="table table-striped table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Category Name</th>
      <th>Created At</th>
      <th colspan="2">Edit | Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($categories as $category) : ?>
    <tr>
      <td><a style="color: #2C3E50;" href="<?php echo site_url('/categories/posts/'.$category['cat_id']); ?>"><?php echo $category['cat_name']; ?></td>
      <td><?php echo $category['created_at'] ?></a></td>
      <td><a href="<?php echo site_url('/categories/edit/'.$category['cat_id']); ?>"><button class="btn btn-success">Edit</button></a></td>
      <td>
        <?php echo form_open('/categories/delete/'.$category['cat_id']); ?>
          <input type="submit" name="delete" value="Delete" class="btn btn-danger pull-right">
        </form>
      </td>
        
    </tr>
    <?php endforeach; ?>
  </tbody>
</table> 