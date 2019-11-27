<h2> <?= $title; ?> </h2>

<?php echo validation_errors();  ?>

<?php echo form_open('posts/update'); ?>

<input type="hidden" name="id" value="<?php echo $post['id'];?>">

	<div class="form-group">
		<label >Title</label>
		<input type="text" class="form-control"  placeholder="Add Title" name="title" value="<?php echo $post['title']?>">
	</div>

	<div class="form-group">
		<label >Body</label>

		<textarea class="form-control"  placeholder="Body" name="body" ><?php echo $post['body']?></textarea> 
	</div> 


	<div class="form-group">

		<label>Category</label>
		<select class="form-control">
			<?php foreach($categories as $category); ?>
			<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		</select>
	</div>

	<button type="submit" class="btn btn-success">Submit</button>
</form>
