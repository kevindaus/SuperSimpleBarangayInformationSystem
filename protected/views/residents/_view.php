<?php
/* @var $this ResidentsController */
/* @var $data Residents */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salutation')); ?>:</b>
	<?php echo CHtml::encode($data->salutation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middle_name')); ?>:</b>
	<?php echo CHtml::encode($data->middle_name); ?>
	<br />

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