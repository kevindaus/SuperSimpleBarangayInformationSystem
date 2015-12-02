<?php
/* @var $this ResidentsController */
/* @var $data Residents */
$baseUrl = Yii::app()->theme->baseUrl; 

if (isset($data->profile_picture) && !empty($data->profile_picture)) {
	$publishedUrl = Yii::app()->assetManager->publish($data->profile_picture);
}
?>

<div class="view trans-menu-panel">
	<div class="pull-left" style="width: 60%; margin:20px;font-size: 15px;">
		<strong class='trans-panel-title' style="font-size: 20px;">
			<?php echo sprintf("%s. %s %s", $data->salutation, $data->firstname , $data->middle_name , $data->lastname); ?>
		</strong>
		<div style='margin: 10px 0px'>
			Contact # : <?php echo $data->mobile_phone_number ?>
		</div>
		<div style='margin: 10px 0px'>
			Age : <?php echo $data->getAge() ?>
		</div>
		<div style='margin: 10px 0px'>
			Address : <?php echo sprintf("%s %s %s %s, %s", $data->house_number , $data->street_name , $data->barangay_name , $data->town , $data->province  , $data->country) ?>
		</div>
	</div>
	<div class="pull-left" style="width: 30%;">
		<?php if (isset($data->profile_picture) && !empty($data->profile_picture)): ?>
			<?php echo CHtml::image($publishedUrl, '' ,array("class"=>"img-polaroid","style"=>"height:200px")); ?>	
		<?php endif ?>
		<?php if (!isset($data->profile_picture) || empty($data->profile_picture)): ?>
			<?php echo CHtml::image($baseUrl.'/uploads/not available.png','', array("class"=>"img-polaroid","style"=>"height:200px")); ?>
		<?php endif ?>
	</div>

	<div class="clearfix"></div>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('birthday')); ?>:</b>
	<?php echo CHtml::encode($data->birthday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postal_code')); ?>:</b>
	<?php echo CHtml::encode($data->postal_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_phone_number')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_phone_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('house_number')); ?>:</b>
	<?php echo CHtml::encode($data->house_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street_name')); ?>:</b>
	<?php echo CHtml::encode($data->street_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barangay_name')); ?>:</b>
	<?php echo CHtml::encode($data->barangay_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('town')); ?>:</b>
	<?php echo CHtml::encode($data->town); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('province')); ?>:</b>
	<?php echo CHtml::encode($data->province); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_address')); ?>:</b>
	<?php echo CHtml::encode($data->email_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employment_type')); ?>:</b>
	<?php echo CHtml::encode($data->employment_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employment_company')); ?>:</b>
	<?php echo CHtml::encode($data->employment_company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('occupation')); ?>:</b>
	<?php echo CHtml::encode($data->occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('height')); ?>:</b>
	<?php echo CHtml::encode($data->height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blood_type')); ?>:</b>
	<?php echo CHtml::encode($data->blood_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resident_since')); ?>:</b>
	<?php echo CHtml::encode($data->resident_since); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_record_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_record_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_record_updated')); ?>:</b>
	<?php echo CHtml::encode($data->date_record_updated); ?>
	<br />

	*/ ?>

</div>