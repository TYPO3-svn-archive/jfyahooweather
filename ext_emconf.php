<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "jfyahooweather".
 *
 * Auto generated 09-04-2014 23:12
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Yahoo Weather',
	'description' => 'Displays the weather and forecast for your location using the Yahoo! weather API. Please read and accept the terms of use by Yahoo! (http://developer.yahoo.com/weather/) before using the plugin!',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '0.0.4',
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
	'author' => 'Juergen Furrer',
	'author_email' => 'juergen.furrer@gmail.com',
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
	'_md5_values_when_last_written' => 'a:11:{s:12:"ext_icon.gif";s:4:"1c8c";s:17:"ext_localconf.php";s:4:"f24e";s:14:"ext_tables.php";s:4:"a958";s:28:"ext_typoscript_constants.txt";s:4:"d41d";s:24:"ext_typoscript_setup.txt";s:4:"fb3c";s:12:"flexform.xml";s:4:"289e";s:16:"locallang_db.xml";s:4:"bb25";s:35:"pi1/class.tx_jfyahooweather_pi1.php";s:4:"8049";s:32:"pi1/class.yahoo_api_resolver.php";s:4:"1415";s:17:"pi1/locallang.xml";s:4:"e8de";s:22:"template/template.html";s:4:"7bd8";}',
	'suggests' => array(
	),
);

?>