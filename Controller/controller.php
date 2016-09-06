<?php
	$self = new \System\Controller;
	include 'admin.php';

	$admin = new Admin();
	
	$self->get("/admin/simpan/:id", $admin->index());
?>