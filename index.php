<?php

// change the following paths if necessary
$autoLoad=dirname(__FILE__).'/protected/vendor/autoload.php';
$yii=dirname(__FILE__).'/protected/framework/yiilite.php';
$config=dirname(__FILE__).'/protected/config/main.php';


// remove the following lines when in production mode
// defined('YII_DEBUG') or define('YII_DEBUG',true);
// // specify how many levels of call stack should be shown in each log message
// defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);


require_once $autoLoad;
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'protected/vendor/dompdf/dompdf/dompdf_config.inc.php';

require_once($yii);
Yii::createWebApplication($config)->run();
