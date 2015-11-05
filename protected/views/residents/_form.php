<?php
/* @var $this ResidentsController */
/* @var $model Residents */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'residents-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salutation'); ?>
		<?php echo $form->textField($model,'salutation',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'salutation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'middle_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'middle_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postal_code'); ?>
		<?php echo $form->textField($model,'postal_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'postal_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_phone_number'); ?>
		<?php echo $form->textField($model,'mobile_phone_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mobile_phone_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'house_number'); ?>
		<?php echo $form->textField($model,'house_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'house_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street_name'); ?>
		<?php echo $form->textField($model,'street_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'street_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barangay_name'); ?>
		<?php echo $form->textField($model,'barangay_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'barangay_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'town'); ?>
		<?php echo $form->textField($model,'town',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'town'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'province'); ?>
		<?php echo $form->textField($model,'province',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_address'); ?>
		<?php echo $form->textField($model,'email_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employment_type'); ?>
		<?php echo $form->textField($model,'employment_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'employment_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employment_company'); ?>
		<?php echo $form->textField($model,'employment_company',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'employment_company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'occupation'); ?>
		<?php echo $form->textField($model,'occupation',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blood_type'); ?>
		<?php echo $form->textField($model,'blood_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'blood_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resident_since'); ?>
		<?php echo $form->textField($model,'resident_since'); ?>
		<?php echo $form->error($model,'resident_since'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_record_created'); ?>
		<?php echo $form->textField($model,'date_record_created'); ?>
		<?php echo $form->error($model,'date_record_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_record_updated'); ?>
		<?php echo $form->textField($model,'date_record_updated'); ?>
		<?php echo $form->error($model,'date_record_updated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->