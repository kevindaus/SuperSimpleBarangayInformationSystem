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
		<small style="color:white">
			<?php echo CHtml::encode($message); ?>	
			<?php 
			$this->widget('bootstrap.widgets.TbAlert', array(
			    'fade'=>true, // use transitions?
			    'closeText'=>'×', // close link text - if set to false, no close link is displayed
			    'alerts'=>array( // configurations per alert type
				    'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
			    ),
			)); ?>
		</small>
	</h1>
	
	

	
</div>
