<?php

require_once 'attemplate.inc.php';
require_once 'vdg.php';

if (empty($_POST['width']) || empty($_POST['height'])
	|| !is_numeric($_POST['width']) || !is_numeric($_POST['height'])) {
	$template = new ATTemplate(array());
	echo $template->parse('_prompt.tpl');
} else {
	$width = $_POST['width'];
	$height = $_POST['height'];
	list($top, $bottom, $inside, $outside) = van_der_graaf($width, $height);
	$template = new ATTemplate(array(
			'top' => $top,
			'bottom' => $bottom,
			'inside' => $inside,
			'outside' => $outside
		));
	echo $template->parse('_response.tpl');
}
