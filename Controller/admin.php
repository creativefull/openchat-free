<?php
class Admin extends \System\View {
	function __construct() {
		// echo "indah";
	}
	function index() {
		return $this->render('dashboard/index');
	}
}