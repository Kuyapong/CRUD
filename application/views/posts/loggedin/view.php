<h2><?php echo $post['title']; ?></h2>
<center><img class="full_blog_image"src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>"></center>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<hr>
<a class="btn btn-secondary pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">
	Edit
</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
	<input type="submit" name="delete" value="Delete" class="btn btn-danger pull-right">
</form>