<?php
namespace System;
defined('Cermai') or die ('Di Larang membuka file ini dari browser');

class View {
	function render($template="", $ext="php") {
		$path = __DIR__ . '/../View/';
		if ($template) {
			if (is_readable($path . $template.".".$ext)) {
				include $path . $template . '.'.$ext;
			}
			else {
				return "Can\'t render ".$template;
			}
		}
		else {
			return "Can\'t render ".$template;
		}
	}
}

class Controller {
	function get($url, $method) {
		if($_SERVER['REQUEST_METHOD'] == 'GET') {
			$this->decodeUrl($url, 'GET');
			return $method;
		}
		else {
			header("Location: 404.php");
			return;			
		}
	}

	function post($url, $method) {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			return $method;
		}
		else {
			header("Location: 404.php");
			return;
		}
	}

	function decodeUrl($url, $method) {
		$before = explode("/", $url);
		$uri = "";
		$params = array();
		foreach ($before as $key => $value) {
			# code...
			$str_mentah = substr($value, 0,1);
			if ($str_mentah == ":") {
				array_push($params, substr($value, 1));
			}
			else {
				
			}
		}
		// echo $params[0];
	}
}
?>