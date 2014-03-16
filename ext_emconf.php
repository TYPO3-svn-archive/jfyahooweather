<?php

########################################################################
# Extension Manager/Repository config file for ext "jfyahooweather".
#
# Auto generated 20-10-2012 12:33
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Yahoo Weather',
	'description' => 'Displays the weather and forecast for your location using the Yahoo! weather API. Please read and accept the terms of use by Yahoo! (http://developer.yahoo.com/weather/) before using the plugin!',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '0.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => 'uploads/tx_jfyahooweather',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Ulrich Barrot, Daniel Spuhler',
	'author_email' => 't3x@macgoo.org',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.5.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:14:{s:9:"ChangeLog";s:4:"ed37";s:12:"ext_icon.gif";s:4:"1c8c";s:17:"ext_localconf.php";s:4:"929f";s:14:"ext_tables.php";s:4:"2ebb";s:28:"ext_typoscript_constants.txt";s:4:"d41d";s:24:"ext_typoscript_setup.txt";s:4:"f3a4";s:12:"flexform.xml";s:4:"8198";s:16:"locallang_db.xml";s:4:"5eb8";s:10:"README.txt";s:4:"5c8f";s:30:"cache/apicache_bf345ef141.json";s:4:"7221";s:39:"pi1/class.tx_jfyahooweather_pi1.php";s:4:"db1a";s:32:"pi1/class.yahoo_api_resolver.php";s:4:"ce62";s:17:"pi1/locallang.xml";s:4:"c6b3";s:22:"template/template.html";s:4:"cb5d";}',
);

?>