<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle ?> | <?php echo Yii::app()->name ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo Yii::app()->params['website_description'] ?>">
    <meta name="author" content="<?php echo Yii::app()->params['author'] ?>">
  	<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  <?php Yii::app()->bootstrap->register(); ?>
	<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
    <!-- Fav and Touch and touch icons -->
    <link rel="shortcut icon" href="<?php echo $baseUrl;?>/img/icons/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $baseUrl;?>/img/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseUrl;?>/img/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $baseUrl;?>/img/icons/apple-touch-icon-57-precomposed.png">
  	<?php  
  	  $cs->registerCssFile($baseUrl.'/css/bootstrap.min.css');
  	  $cs->registerCssFile($baseUrl.'/css/bootstrap-responsive.min.css');
  	  $cs->registerCssFile($baseUrl.'/css/abound.css');
  	  $cs->registerCssFile($baseUrl.'/bower_components/font-awesome/css/font-awesome.min.css');
	  ?>
    <?php
      $cs->registerScriptFile($baseUrl.'/js/bootstrap.min.js'  , CClientScript::POS_END);
      $cs->registerScriptFile($baseUrl.'/js/jquery-migrate-1.2.1.js' , CClientScript::POS_END);
      // $cs->registerScriptFile($baseUrl.'/js/plugins/jquery.sparkline.js' , CClientScript::POS_END);
      // $cs->registerScriptFile($baseUrl.'/js/plugins/jquery.flot.min.js' , CClientScript::POS_END);
      // $cs->registerScriptFile($baseUrl.'/js/plugins/jquery.flot.pie.min.js' , CClientScript::POS_END);
      // $cs->registerScriptFile($baseUrl.'/js/charts.js' , CClientScript::POS_END);
      // $cs->registerScriptFile($baseUrl.'/js/plugins/jquery.knob.js' , CClientScript::POS_END);
      // $cs->registerScriptFile($baseUrl.'/js/plugins/jquery.masonry.min.js' , CClientScript::POS_END);
      // $cs->registerScriptFile($baseUrl.'/js/styleswitcher.js' , CClientScript::POS_END);
    ?>    
      <!-- styles for style switcher -->
      	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/style-blue.css" />
  </head>

<body>

<!-- <section id="navigation-main">  -->
<!-- Require the navigation -->
<?php //require_once('tpl_navigation.php') ?>
<!-- </section> -->
<!-- /#navigation-main -->
    
<section class="main-body">
    <div class="container-fluid">
            <!-- Include content pages -->
            <?php echo $content; ?>
    </div>
</section>  
<br>
<br>
<!-- Require the footer -->
<?php //require_once('tpl_footer.php') ?>


  

  </body>
</html>