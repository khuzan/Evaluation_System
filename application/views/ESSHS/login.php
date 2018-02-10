<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
</head>
<body>
	<form method="POST" action="<?php echo base_url('esshs_controller/login');?>">
		<input type="text" name="uname">
		<span><?php echo form_error('uname'); ?></span>
		<input type="password" name="pwd">
		<span><?php echo form_error('pwd'); ?></span>
		<button type="submit">Login</button>
		<?php echo $this->session->flashdata('error'); ?>
	</form>
</body>
</html>