<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	//Todas estas variables son accesibles de esta manera: Yii::app()->variable
	'name'=>'SGAEC', //Nombre sistema
	'language'=>'es', //Lenguaje español
	'charset'=>'utf-8',
	'theme'=>'newtheme',
	
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Acer132?',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('*.*.*.*'),
		),
		
	),

	// application components
	'components'=>array(
		'authManager'=>array(
				"class"=>"CDbAuthManager",
				"connectionID"=>"db",
			),

		'user'=>array(
			'class' => 'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,			
		),
		'metodos' => array(
        'class'=>'application.components.Metodos',
    ),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=SGAEC',
			'emulatePrepare' => true,
			'username' => 'grupo7',
			'password' => 'Acer132?',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']

	//VAriables creadas por nosotros
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'contacto@newen.com',
	),
);