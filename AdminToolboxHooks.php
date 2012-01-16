<?php
	
/**
 * Admin Toolbox Integration Hooks
 *
 * @package Admin Toolbox
 * @license This Source Code is subject to the terms of the Mozilla Public License
 * version 2.0 (the "License"). You can obtain a copy of the License at
 * http://mozilla.org/MPL/2.0/.
 *
 * @version 1.0
 */

/**
 *
 * @global type $txt
 * @param type $admin_areas
 */
function iaa_admintoolbox(&$admin_areas)
{
	// Admin Hook, integrate_admin_areas, called from Admin.php
	// used to add/modify admin menu areas
	global $txt;

	// our admintoolbox tab
	$admin_areas['maintenance']['areas']['toolbox'] = array(
		'label' => $txt['toolbox_title'],
		'file' => 'AdminToolbox.php',
		'icon' => 'toolbox.gif',
		'function' => 'AdminToolbox',
	);
}

?>