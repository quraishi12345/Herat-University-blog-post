<h2><?php echo $title; ?></h2>
<?php foreach ($posts as $post):?> 
	<h3><?php echo $post['title'];?></h3>
	<div class="row">
	<!-- <div class="col-md-3">
		
	</div> -->
	<div class="col-md-12">
		
		<small class="post-date">Posted on:<?php echo $post['created_at'];?> in <strong><?php echo $post['name']; ?></strong></small>
	<br>
	<img class=" post-thumb thumbnail" src=" <?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?> ">
	<br/>
	<?php echo word_limiter( $post['body'],115);?>
	<br><br>
	<p><a class="btn btn-success" href="<?php echo site_url('/posts/'.$post['slug']);?>">Read More</a></p>
	</div>
	</div>
	
<?php endforeach;?> 
<div class="pagination-links">
	<?php echo $this->pagination->create_links(); ?>
</div>