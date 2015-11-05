<?php 
/*@var $this ProfileController*/
?>
<div class="main-dashboard-container">
<h1 style="color: white">View Profile Information</h1>

<?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Return to main ', array('/')); ?>
<hr>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id',
		// 'username',
		// 'password',
		'salutation',
		'firstname',
		'lastname',
		'middle_name',
		array(
			"name"=>"birthday",
			"type"=>"raw",
			"value"=>date('F j, Y',strtotime($model->birthday)),
		),		
		'postal_code',
		'mobile_phone_number',
		'house_number',
		'street_name',
		'barangay_name',
		'town',
		'province',
		'country',
		'email_address',
		'employment_type',
		'employment_company',
		'occupation',
		'height',
		'weight',
		'blood_type',
		array(
			"name"=>"resident_since",
			"type"=>"raw",
			"value"=>date('F j, Y',strtotime($model->resident_since)),
		),
		array(
			"name"=>"date_record_created",
			"type"=>"raw",
			"value"=>date('F j, Y',strtotime($model->date_record_created)),
		),
	),
)); ?>

</div>