<?php
/* @var $this BarangayInfoController */
/* @var $model BarangayInfo */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<style type="text/css">	
	label{
		text-align: right;
		margin-bottom:20px;
	}
	.errorMessage{
		margin-bottom:20px;
	}
	textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
		margin-bottom:0px;
	}

</style>

<div class='update-barangay-info'>
	<h1>
		<img src="<?php echo $baseUrl ?>/img/Developer-icon.png">
		Update current barangay information
	</h1>
	<hr>

	<div class="">
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
			'id'=>'barangay-info-form',
		)); ?>


		<?php 
			$this->widget('bootstrap.widgets.TbAlert', array(
			    'fade'=>true, // use transitions?
			    'closeText'=>'×', // close link text - if set to false, no close link is displayed
			    'alerts'=>array( // configurations per alert type
				    'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
				    'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
			    ),
			)); 
		?>
		<div class="row">
			<div class="span3">
				<?php echo $form->labelEx($model,'province'); ?>
			</div>
			<div class="span6">
				<?php echo $form->textField($model,'province',array('size'=>60,'maxlength'=>255)); ?>
				<br>
				<?php echo $form->error($model,'province'); ?>
			</div>
		</div>

		<div class="row">
			<div class="span3">
				<?php echo $form->labelEx($model,'municipality'); ?>
			</div>
			<div class="span6">
				<?php echo $form->textField($model,'municipality',array('size'=>60,'maxlength'=>255)); ?>
				<br>
				<?php echo $form->error($model,'municipality'); ?>
			</div>
		</div>

		<div class="row">
			<div class="span3">
				<?php echo $form->labelEx($model,'barangay'); ?>
			</div>
			<div class="span6">
				<?php echo $form->textField($model,'barangay',array('size'=>60,'maxlength'=>255)); ?>
				<br>
				<?php echo $form->error($model,'barangay'); ?>
			</div>
		</div>
		<div class="row">
			<div class="span3">
				<?php echo $form->labelEx($model,'street'); ?>
			</div>
			<div class="span6">
				<?php echo $form->textField($model,'street',array('size'=>60,'maxlength'=>255)); ?>
				<br>
				<?php echo $form->error($model,'street'); ?>
			</div>
		</div>

		<div class="row">
			<div class="span3">
				<?php echo $form->labelEx($model,'mission'); ?>
			</div>
			<div class="span6">
				<?php echo $form->textArea($model,'mission',array(
					'style'=>"height: 150px;width: 350px;margin-bottom: 30px;"
				)); ?>


				<br>
				<?php echo $form->error($model,'mission'); ?>
			</div>
		</div>

		<div class="row">
			<div class="span3">
				<?php echo $form->labelEx($model,'vision'); ?>
			</div>
			<div class="span6">
				<?php echo $form->textArea($model,'vision',array('style'=>"height: 150px;width: 350px;margin-bottom: 30px;")); ?>
				<br>
				<?php echo $form->error($model,'vision'); ?>
			</div>
		</div>

		<?php echo CHtml::submitButton('Update' , array('id'=>"update-barangay-info-button")); ?>

		<?php $this->endWidget(); ?>
	</div><!-- form -->


</div>

