<?php

Yii::setPathOfAlias("imageUploads", dirname(__FILE__). '/../../themes/abound/uploads');


return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Barangay Information System',
    'theme' => 'abound',
    // preloading 'log' component
    'preload' => array('log'),
    'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
        'yiiwheels' => realpath(__DIR__ . '/../extensions/yiiwheels'),
    ),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'bootstrap.helpers.TbHtml',
        'bootstrap.helpers.TbArray',
        'bootstrap.behaviors.TbWidget',
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'password',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
    // application components
    'components' => array(
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
        ),
        'yiiwheels' => array(
            'class' => 'ext.yiiwheels.YiiWheels',
        ),


        'user' => array(
            // enable cookie-based authentication
            'class'=>"BISWebUser",
            'allowAutoLogin' => true,
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '/visionMission'=>"site/visionMission",
                '/home'=>"site/index",
                '/barangayOfficials'=>"barangayOfficials/index",
                '/updateInfo'=>"barangayInfo/updateInfo",
                '/login'=>"site/login",
                '/logout'=>"site/logout",
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        // uncomment the following to use a MySQL database
          'db'=>array(
              'connectionString' => 'mysql:host=localhost;dbname=barangayinformationsystem',
              'emulatePrepare' => true,
              'username' => 'root',
              'password' => 'root',
              'charset' => 'utf8',
          ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    // 'class' => 'CFileLogRoute',
                    'class' => 'CWebLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
              // array(
              // 'class'=>'CWebLogRoute',
              // 'levels' => 'error, warning',
              // ),
            /*
              array(
              'class'=>'CEmailLogRoute',
              'levels'=>'error',
              'emails'=>'hellsing357@gmail.com',
              ),
             */
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'info@barangayinformationsystem.com',
        'website_description' => 'Barangay Information System',
        'author' => 'juan dela cruz',
    ),
);
