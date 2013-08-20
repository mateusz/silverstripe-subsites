<?php

/*
 * Simple extension to show admins in the menu of subsites.
 * If an admin area should be available to a subsite, you can attach 
 * this class to your admin in config. eg:
 *
 * 		MyAdmin::add_extension('SubsiteMenuExtension');
 *
 * Or you can include the subsiteMenu function in your class and have it return true
 */

class SubsiteMenuExtension extends Extension{
	
	public function subsiteMenu(){
		return true;
	}

}
