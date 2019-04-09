<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// variable data form
if($results) {
    foreach($results as $row) {
        $title = $row->title;
        $description = $row->description;
        $id = $row->id;
    }
}
?>
<h1>Edit Article</h1>
<?php echo form_open_multipart('article/edit/'. $id); ?>
<div class="ui form">
	<div class="field">
		<label for="title">Title</label>
		<input type="text" name="title" value="<?php echo set_value('title', $title) ?>">
		<?php echo form_error('title'); ?>
	</div>	
	<div class="field">
		<label for="description">Description</label>
		<textarea name="description"><?php echo set_value('description', $description) ?></textarea>
		<?php echo form_error('description'); ?>
	</div>
	<div class="field">
		<input type="submit" value="EDIT" class="ui button blue">
	</div>
</div>
</form>