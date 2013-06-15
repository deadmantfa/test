<?php
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'ePaisa Test project',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		'Ajax',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'commandMap'=>array(
			'migrate'=>array(
				'class'=>'system.cli.commands.MigrateCommand',
				'migrationPath'=>'application.migrations',
				'migrationTable'=>'tbl_migration',
				'connectionID'=>'db',
				'templateFile'=>'application.migrations.template',
			),
		),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
			),
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=test',
			'schemaCachingDuration'=>3600,
			'enableProfiling'=>true,
			'enableParamLogging'=> true,
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'admin',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'cache'=>array(
			'class'=>'system.caching.CMemCache',
			'servers'=>array(
				array('host'=>'localhost', 'port'=>11211, 'weight'=>80),
			),
		),
		'session'=>array(
			'class'=>'CCacheHttpSession',
			'cacheID'=>'sessionCache',
		),
		'sessionCache'=>array(
			'class'=>'CApcCache'
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
//				array(
//					'class'=>'CWebLogRoute',
//				),
//				array(
//					'class'=>'CProfileLogRoute',
//				),
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'wenceslausdsilva@gmail.com',
	),
);