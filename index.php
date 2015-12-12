<?php
define('YII_DEBUG', true);


// change the following paths if necessary
$autoLoad=dirname(__FILE__).'/protected/vendor/autoload.php';
$yii=dirname(__FILE__).'/protected/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';



require_once $autoLoad;
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'protected/vendor/dompdf/dompdf/dompdf_config.inc.php';

require_once($yii);
Yii::createWebApplication($config)->run();
