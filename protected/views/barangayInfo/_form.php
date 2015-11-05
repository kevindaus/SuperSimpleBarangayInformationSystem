<?php
/* @var $this BarangayInfoController */
/* @var $model BarangayInfo */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<style type="text/css">	
	label{
		text-align: right;
	}
</style>


<div class="">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barangay-info-form',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>


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


	<div class="">
		<div class="span3">
			<?php echo $form->labelEx($model,'province'); ?>
		</div>
		<div class="span6">
			<?php echo $form->textField($model,'province',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'province'); ?>
		</div>
	</div>

	<div class="">
		<div class="span3">
			<?php echo $form->labelEx($model,'municipality'); ?>
		</div>
		<div class="span6">
			<?php echo $form->textField($model,'municipality',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'municipality'); ?>
		</div>
	</div>

	<div class="">
		<div class="span3">
			<?php echo $form->labelEx($model,'barangay'); ?>
		</div>
		<div class="span6">
			<?php echo $form->textField($model,'barangay',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'barangay'); ?>
		</div>
	</div>


	<div class="">
		<div class="span3">
			<?php echo $form->labelEx($model,'punong_barangay'); ?>
		</div>
		<div class="span6">
			<?php echo $form->textField($model,'punong_barangay',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'punong_barangay'); ?>
		</div>
	</div>

	<div class="">
		<div class="span3">
			<?php echo $form->labelEx($model,'secretary'); ?>
		</div>
		<div class="span6">
			<?php echo $form->textField($model,'secretary',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'secretary'); ?>
		</div>
	</div>


	<div class="">
		<div class="span3">
			<?php echo $form->labelEx($model,'secretary'); ?>
		</div>
		<div class="span6">
			<?php echo $form->textField($model,'secretary',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'secretary'); ?>
		</div>
	</div>

	<div class="">
			<?php echo CHtml::submitButton('Save' , array('class'=>"btn btn-success span12")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

