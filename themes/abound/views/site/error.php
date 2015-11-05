<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>
<div class="span1">
</div>
<div class="span8">
	<h1 style="color:white;text-align: left;padding-top: 131px;font-size: 74px;">
		<img src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-9/128/Warning-icon.png">
		Error <?php echo $code; ?> 
		<br>
		<small style="color:white"><?php echo $message; ?></small>
	</h1>
	
	

	
</div>
