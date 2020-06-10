<?php
//obecná funkce pro zjištění jazyka z url pro použití i v jiných částech wp

// If this file is called directly, abort.
if (! defined("WPINC")) {
  die;
   } 

function naswp_is_lang($lang)
{

	$path_parts = explode('/', $_SERVER['REQUEST_URI']);

	if(isset($path_parts[0])) {
		foreach ($path_parts as $path_part) {
			if($path_part === $lang) {
				return true;
			}
		}
	}

	return false;
}

