<?php

//
//  attemplate.inc.php
//
//  Created by Kenneth Ballenegger on 2009-06-30.
//  Copyright (c) 2009 Arure Talon. All rights reserved.
//

/*
*
* ATTemplate
*
* A template wrapper, based on the simplicity of using PHP itself for templating.
*
*/

class ATTemplate
{
	private $proprieties;
	
	// constructor
	// optional $props: initial proprieties array
	function ATTemplate($props=null)
	{
		if(isset($props))
			if(is_array($props))
				$this->proprieties = $props;
		else
			$this->proprieties = array();
	}
	
	// set $key propriety as $value
	function set($key, $value)
	{
		$this->proprieties[$key] = $value;
	}
	
	// push array contents into proprieties 
	// $props: proprieties array
	function push($props)
	{
		if(is_array($props))
			foreach($props as $key => $value)
				$this->set($key, $value);
	}
	
	// parse template $file
	// returns parsed text
	function parse($file)
	{
		$unique_id = uniqid();
		$file_{$unique_id} = $file; // this is to protect us from the eventuality the user has a propriety named file
		foreach($this->proprieties as $key => $value)
			${$key} = $value;
		ob_start();
		require $file_{$unique_id};
		return ob_get_clean();
	}
}

?>
