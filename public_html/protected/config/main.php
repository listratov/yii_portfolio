<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Портфолио',
        'theme'=>'freelancer',
        'defaultController' => 'Portfolio',
        
        'aliases' => array(
          'bootstrap'=>'application.modules.bootstrap',
          'chartjs'=>'application.modules.bootstrap.extensions.yii-chartjs-master',
        ),
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
            
            
            'bootstrap.*',
            'bootstrap.components.*',
            'bootstrap.models.*',
            'bootstrap.controllers.*',
            'bootstrap.helpers.*',
            'bootstrap.widgets.*',
            'bootstrap.extensions.*',            
            'bootstrap.behaviors.*',
            'chartjs.*',
            'chartjs.widgets.*',
            'chartjs.components.*',
	),

	'modules'=>array(
            'bootstrap'=> array(
                'class' => 'bootstrap.BootStrapModule'
            ),
		// uncomment the following to enable the Gii tool
		// /index.php?r=gii
                // /index.php/gii/
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admindemo',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths'=> array('bootstrap.gii'),
		),
		
	),

	// application components
	'components'=>array(
            
                'bsHtml'=>array('class'=>'bootstrap.components.BSHtml'),
                'chartjs'=>array('class'=>'chartjs.components.ChartJs'),
            
                'clientScript' => array(
                    'coreScriptPosition' => CClientScript::POS_END,
                ),
                'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',    // включаем ЧПУ
//                                'showScriptName'=>false, // убираем название скрипта из урл
//                                'caseSensitive'=>false,  
//                                'urlSuffix' => '.html',
                            'rules'=>array(
                                    '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                                    '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                                    '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                            ),
		),
		
//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yii_test',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'espltdb206',
			'charset' => 'utf8',
                        'tablePrefix'=> 'yii_test',
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
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'listratov.m@gmail.com',
                'uploadPath'=>dirname(__FILE__).'/../../images/portfolio',
                'uploadUrl'=>'/images/portfolio',
	),
);
