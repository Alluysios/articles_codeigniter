<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>New Article</h1>

<?php echo form_open_multipart('article/create'); ?>
<div class="ui form">
	<div class="field">
		<label for="title">Title</label>
		<input type="text" name="title" class="form-control" value="<?php echo set_value('title') ?>">
		<?php echo form_error('title'); ?>
	</div>	
	<div class="field">
		<label for="description">Description</label>
		<textarea name="description" class="form-control"><?php echo set_value('description') ?></textarea>
		<?php echo form_error('description'); ?>
	</div>
	<div class="field three wide">
		<input type="file" name="img">
	</div>
	<?php if($error) :?>
	<div class="ui message red"><?php echo $error; ?></div>
	<?php endif; ?>
	<button class="ui blue button" type="submit">Submit</button>
</div>
</form>