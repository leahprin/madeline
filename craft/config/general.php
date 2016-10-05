<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

	'*' => array(
			'devMode' => true,
	),

	'.dev' => array(
			'environmentVariables' => array(
					'basePath' => '/Users/rick/dev/cogs-themes/cog-boilerplate-craft/',
					'baseUrl'  => 'http://cog-boilerplate-craft.dev/',
					'userSessionDuration' => false,
					'omitScriptNameInUrls' => true,
			)
	),

);
