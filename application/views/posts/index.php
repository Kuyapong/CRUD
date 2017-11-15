<h1>Blog</h1>

<?php foreach ($posts as $post) : ?>
<div class="jumbotron">
	<div class="row">
		<div class="col-md-3">
			<img class="post_thumbnail" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
		</div>
		<div class="col-md-9">
			<h3 class="display-5"><?php echo $post['title']; ?></h3>
		    <small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['cat_name']; ?></strong></small>
		    <p><?php echo word_limiter($post['body'], 50); ?></p>
		    <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more</a></p>
		</div>
	</div>
</div>
<?php endforeach; ?>