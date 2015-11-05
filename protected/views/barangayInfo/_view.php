<?php
/* @var $this BarangayInfoController */
/* @var $data BarangayInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('province')); ?>:</b>
	<?php echo CHtml::encode($data->province); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('municipality')); ?>:</b>
	<?php echo CHtml::encode($data->municipality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barangay')); ?>:</b>
	<?php echo CHtml::encode($data->barangay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('punong_barangay')); ?>:</b>
	<?php echo CHtml::encode($data->punong_barangay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secretary')); ?>:</b>
	<?php echo CHtml::encode($data->secretary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_updated')); ?>:</b>
	<?php echo CHtml::encode($data->date_updated); ?>
	<br />


</div>