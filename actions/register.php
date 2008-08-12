<?php

	/**
	 * Elgg registration action
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */

	require_once(dirname(dirname(__FILE__)) . "/engine/start.php");
	global $CONFIG;
	
	action_gatekeeper();

	// Get variables
		$username = get_input('username');
		$password = get_input('password');
		$password2 = get_input('password2');
		$email = get_input('email');
		$name = get_input('name');
		
		$admin = get_input('admin');
		if (is_array($admin)) $admin = $admin[0];
		
		
		if (!$CONFIG->disable_registration)
		{
	// For now, just try and register the user
	
			try {
				if (
					(
						(trim($password)!="") &&
						(strcmp($password, $password2)==0) 
					) &&
					($guid = register_user($username, $password, $name, $email))
				) {
					if (($guid) && ($admin))
					{
						admin_gatekeeper(); // Only admins can make someone an admin
						$new_user = get_entity($guid);
						$new_user->admin = 'yes';
					}
					
					system_message(sprintf(elgg_echo("registerok"),$CONFIG->sitename));
					
					forward(); // Forward on success, assume everything else is an error...
				} else {
					register_error(elgg_echo("registerbad"));
				}
			} catch (RegistrationException $r) {
				register_error($r->getMessage());
			}
		}
		else
			register_error(elgg_echo('registerdisabled'));
			
		$qs = explode('?',$_SERVER['HTTP_REFERER']);
		$qs = $qs[0];
		$qs .= "?u=" . urlencode($username) . "&e=" . urlencode($email) . "&n=" . urlencode($name);
		
		forward($qs);

?>