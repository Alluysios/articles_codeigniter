<?php
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>
<div class="ui form">
	<div class="eight wide field">
		<?php echo form_label('Password', $password['id']); ?>
		<?php echo form_password($password); ?></td>
		<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
	</div>
	<div class="eight wide field">
		<?php echo form_label('New email address', $email['id']); ?>
		<?php echo form_input($email); ?>
		<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
	</div>
</div>

<?php echo form_submit('change', 'Send confirmation email', 'class="ui small blue button"'); ?>
<?php echo form_close(); ?>