<?php

require_once 'attemplate.inc.php';
require_once 'vdg.php';

if (empty($_POST['width']) && empty($_POST['height'])) {

	$template = new ATTemplate(array());
	$out_tpl = new ATTemplate(array('content' => $template->parse('_prompt.tpl')));
	echo $out_tpl->parse('_body.tpl');

} else if (empty($_POST['width']) || empty($_POST['height'])
	|| !is_numeric($_POST['width']) || !is_numeric($_POST['height'])) {

	$template = new ATTemplate(array('message' => 'Something went wrong!'));
	$out_tpl = new ATTemplate(array('content' => $template->parse('_prompt.tpl')));
	echo $out_tpl->parse('_body.tpl');

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
	$out_tpl = new ATTemplate(array('content' => $template->parse('_response.tpl')));
	echo $out_tpl->parse('_body.tpl');
}
