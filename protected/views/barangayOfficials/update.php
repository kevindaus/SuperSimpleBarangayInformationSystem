<?php 
$baseUrl = Yii::app()->theme->baseUrl; 


$monthsList = array(
                "January" => 'January',
                "February" => 'February',
                "March" => 'March',
                "April" => 'April',
                "May" => 'May',
                "June" => 'June',
                "July" => 'July',
                "August" => 'August',
                "September" => 'September',
                "October" => 'October',
                "November" => 'November',
                "December" => 'December'
            );

$yearListRange = range(2001, intval(date("Y")) + 20);
$yearList = [];
foreach ($yearListRange as $key => $value) {
	$yearList[$value] = $value;
}


?>


<div class="update-barangay-info">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barangay-officials-create-form',
    'htmlOptions'=>array(
        'enctype'=>'multipart/form-data'
    )
)); ?>
	
	<h1>
		<img src="<?php echo $baseUrl ?>/img/Developer-icon.png">
		Register Official Record
	</h1>

	<?php
	$this->widget('bootstrap.widgets.TbAlert', array(
	    'fade'=>true, // use transitions?
	    'closeText'=>'×', // close link text - if set to false, no close link is displayed
	    'alerts'=>array( // configurations per alert type
		    'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
		    'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
	    ),
	)); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<hr>
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'profile_image'); ?>
		</div>
		<div class="span6">
			<?php echo CHtml::activeFileField($model, 'profile_image'); ?>
			<br>
			<?php echo $form->error($model,'profile_image'); ?>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'firstname'); ?>
		</div>
		<div class="span6">
			<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>255)); ?>
			<br>
			<?php echo $form->error($model,'firstname'); ?>
		</div>
	</div>
	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'middlename'); ?>
		</div>
		<div class="span6">
			<?php echo $form->textField($model,'middlename',array('size'=>60,'maxlength'=>255)); ?>
			<br>
			<?php echo $form->error($model,'middlename'); ?>
		</div>
	</div>	
	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'lastname'); ?>
		</div>
		<div class="span6">
			<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>255)); ?>
			<br>
			<?php echo $form->error($model,'lastname'); ?>
		</div>
	</div>
	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'position'); ?>
		</div>
		<div class="span6">
			<?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>255,'placeholder'=>'e.g Punong Barangay')); ?>
			<br>
			<?php echo $form->error($model,'position'); ?>
		</div>
	</div>


	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'term_from'); ?>
		</div>
		<div class="span6">
			<?php echo CHtml::dropDownList('term_from_month', 'October', $monthsList,array('prompt'=>"Select month","disabled"=>"disabled")); ?>
			<?php echo CHtml::dropDownList('term_from_year', '', $yearList,array('prompt'=>"Select year")); ?>
			<br>
			<?php echo $form->error($model,'term_from'); ?>
		</div>
	</div>

	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'term_to'); ?>
		</div>
		<div class="span6">
			<?php echo CHtml::dropDownList('term_to_month', 'October', $monthsList,array('prompt'=>"Select month","disabled"=>"disabled")); ?>
			<?php echo CHtml::dropDownList('term_to_year', '', $yearList,array('prompt'=>"Select year")); ?>

			<br>
			<?php echo $form->error($model,'term_to'); ?>
		</div>
	</div>



	<div class="row">
		<hr>
	</div>

	<div class="row">
		<?php echo CHtml::submitButton('Submit', array('id'=>"update-barangay-info-button")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>