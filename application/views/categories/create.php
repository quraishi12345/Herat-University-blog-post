<h2><?= $title ; ?></h2>

<?php echo validation_errors(); ?>

<?php  echo form_open_multipart('categories/create'); ?>
	
	<div class="form_group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" placeholder="Enter name">
	</div>
	<br>
	<button type="submit" class="btn btn-success" >Submit</button>
</form>