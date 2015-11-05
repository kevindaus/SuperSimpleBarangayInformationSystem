<?php
/* @var $this ResidentsController */
/* @var $model Residents */

$this->breadcrumbs=array(
	'Residents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Residents', 'url'=>array('index')),
	array('label'=>'Create Residents', 'url'=>array('create')),
	array('label'=>'Update Residents', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Residents', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Residents', 'url'=>array('admin')),
);
?>

<h1>View Residents #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'salutation',
		'firstname',
		'lastname',
		'middle_name',
		'birthday',
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
		'resident_since',
		'date_record_created',
		'date_record_updated',
	),
)); ?>
